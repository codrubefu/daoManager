<?php

namespace App\Http\Controllers\Club;

use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
class ClubController
{
    public function index()
    {
        return view('club.index');
    }

    public function add(Request $request,Club $club) : Club
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'cui' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.$club::class],
        ]);

        $createdClub=$club::create($request->all());
        return $createdClub;

    }

    public function edit(){
            return view('club.edit');
    }

    public function list(Club $club): Collection
    {
     return $club::all();
    }
}
