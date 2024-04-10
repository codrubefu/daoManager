<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;

class UserService
{
    protected function validateEmail($email, $club_id, $request): bool
    {
        $user = User::where('email', $email)->where('club_id', $club_id)->first();
        if ($user) {
            if ($user->id == $request->id) {
                return true;
            }

            return false;
        }

        return true;
    }

    public function validate(Request $request)
    {

        $parentUser = $request->user();

        $validateEmail = $this->validateEmail($request->email, $parentUser->club_id, $request);

        if ($validateEmail == false) {
            return response()->json(['error' => 'Email already exists'], 500);
        }

        try {
            $request->validate([
                'phone' => ['required', 'max:50'],
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],

            ]);

            return true;
        } catch (\Exception $e) {

            return response()->json(['error' => $e->getMessage()], 500);
        }

    }
}
