<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function add(UserRequest $userRequest): User
    {
        return User::create($userRequest->validated());
    }

    public function edit(Request $request, UserRequest $userRequest): User
    {
        $user = $this->getUser($request);
        $user->update($userRequest->validated());
        return $user;
    }

    public function list(Request $request): array
    {

        $parentUser = $request->user();

        if ($parentUser->club_id == null) {
            return [];
        }

        $users = User::where('club_id', $parentUser->club_id)->get();

        return $users->toArray();
    }

    public function getUser(Request $request): User
    {
        $user = User::where(
            [
                'id' => $request->id,
                'club_id' => $request->user()->club_id
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
        $info = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'club_id' => $user->club_id,
            'role' => $user->getRoleNames()->first()
        ];
        return new JsonResponse($info, 200);
    }

}
