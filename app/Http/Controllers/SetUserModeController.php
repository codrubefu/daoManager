<?php

namespace App\Http\Controllers;

use App\Models\User;

class SetUserModeController
{
    public function index()
    {
        $user=User::find(64);
        $user->assignRole('ClubAdmin');
        $user->save();

    }
}
