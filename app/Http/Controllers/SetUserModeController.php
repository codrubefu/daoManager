<?php

namespace App\Http\Controllers;

use App\Models\User;

class SetUserModeController
{
    public function index()
    {
        $user=User::find(3);
        $user->assignRole('superAdmin');
        $user->save();

    }
}
