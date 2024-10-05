<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{

    public function add(UserRequest $userRequest): User
    {
        $group = Group::where('id', $userRequest->group_id)
            ->where('club_id', $userRequest->user()->club_id)
            ->first();

        abort_if(!$group, 404, 'Group not found');

        $user = new User($userRequest->validated());
        $user->group()->associate($group);
        $user->save();

        return $user;
    }

    public function edit(Request $request, UserRequest $userRequest): User
    {
        $user = $this->getUser($request);
        $user->update($userRequest->validated());
        return $user;
    }

    public function list(Request $request, User $user): array
    {


        $users = $user->with('group')
            ->orderBy('first_name', 'asc')
            ->get();

        return $users->toArray();
    }

    public function getUser(Request $request): User
    {
        $user = User::where(
            [
                'id' => $request->id
            ]
        )->first();

        abort_if(!$user, 404, 'User not found');
        return $user;
    }

    public function delete(Request $request): JsonResponse
    {
        $user = $this->getUser($request);
        $user->delete();
        return new JsonResponse(null, 204);
    }

    public function getCurrentUser(Request $request): JsonResponse
    {
        $user = $request->user();

        if(!$user) {
            return new JsonResponse(null, 204);
        }

        $sessionId = $request->session()->getId();
        $cacheKey = 'current_user_' . $sessionId;

        $info = Cache::remember($cacheKey, 60, function () use ($user) {
            return [
                'id' => $user->id,
                'name' => $user->first_name . ' ' . $user->last_name,
                'email' => $user->email,
                'club_id' => $user->club_id,
                'role' => $user->getRoleNames()->first()
            ];
        });

        return new JsonResponse($info, 200);
    }

}
