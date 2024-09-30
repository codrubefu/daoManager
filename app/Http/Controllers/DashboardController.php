<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(Request $request): bool|string
    {
        $user= $request->user();
        return json_encode([
            'message' => 'Welcome to the dashboard'
        ]);
    }
}
