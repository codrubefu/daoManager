<?php

namespace App\Http\Controllers\Club;

use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class ClubController
{
    public function get(Club $club, Request $request): Club
    {
        return $club::find($request->id);
    }

    public function add(Request $request, Club $club): Club
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'cui' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . $club::class],
        ]);

        $createdClub = $club::create($request->all());
        return $createdClub;

    }

    public function edit(Club $club, Request $request): Club
    {
        $club = $club::find($request->id);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'cui' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . $club::class . ',email,' . $club->id],
        ]);

        $club->update($request->all());

        return $club;
    }

    public function deactivate(Club $club, Request $request): Collection
    {
        $club = $club::find($request->id);
        $club->active = false;
        $club->save();
        return $club::all();
    }

    public function activate(Club $club, Request $request): Collection
    {
        $club = $club::find($request->id);
        $club->active = true;
        $club->save();
        return $club::all();
    }

    public function list(Club $club): Collection
    {
        return $club::all();
    }
}
