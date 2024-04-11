<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function add(Request $request, UserService $userService): User|JsonResponse
    {
        $validate = $userService->validate($request);
        if ($validate !== true) {
            return $validate;
        }
        $user = new User();

        foreach ($request->all() as $key => $value) {
            $user->{$key} = $value;
        }

        $user->password = Hash::make(rand(100000, 999999));

        $parentUser = $request->user();
        $user->club_id = $parentUser->club_id;

        $user->save();

        return $user;
    }

    public function update(User $user, Request $request, UserService $userService): JsonResponse|User
    {
        $validate = $userService->validate($request);

        if ($validate !== true) {
            return $validate;
        }

        $user = $user::find($request->id);

        foreach ($request->all() as $key => $value) {
            $user->{$key} = $value;
        }

        $user->save();

        return $user;
    }


    public function list(Request $request): array
    {

        $parentUser = $request->user();

        if($parentUser->club_id == null){
            return [];
        }
        $users = User::where('club_id', $parentUser->club_id)->get();

        return $users->toArray();
    }

    public function getUser(User $user, Request $request): User
    {
        return $user::find($request->id);
    }

}
