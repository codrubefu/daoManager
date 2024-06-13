<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Http\Requests\GroupRequest;
use App\Models\Group;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function add(GroupRequest $groupRequest): Group {
        return Group::create($groupRequest->validated());
    }

    public function edit(Request $request, GroupRequest $groupRequest): Group
    {
        $user = $this->getGroup($request);
        $user->update($groupRequest->validated());
        return $user;
    }

    public function list(Request $request): array
    {

        $parentUser = $request->user();

        if ($parentUser->club_id == null) {
            return [];
        }

        $users = Group::where('club_id', $parentUser->club_id)->get();

        return $users->toArray();
    }

    public function getGroup(Request $request): Group
    {
        $group = Group::where(
            [
                'id' => $request->id,
                'club_id' => $request->user()->club_id
            ]
        )->first();

        abort_if(!$group, 404, 'User not found');
        return $group;
    }

    public function delete(Request $request): JsonResponse
    {
        $user = $this->getGroup($request);
        $user->delete();
        return new JsonResponse(null, 204);
    }
}
