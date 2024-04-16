<?php

namespace App\Http\Controllers\Club;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\ClubRequest;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    private function findClub(Request $request): Club
    {
        return Club::find($request->id);
    }

    public function get(Request $request): Club
    {
        return $this->findClub($request);
    }

    public function add(ClubRequest $request): Club
    {
        return Club::create($request->validated());
    }

    public function edit(Request $request, ClubRequest $clubRequest): Club
    {
        $club = $this->findClub($request);
        $club->update($clubRequest->validated());
        return $club;
    }

    public function deactivate(Request $request): Collection
    {
        $club = $this->findClub($request);
        $club->update(['active' => false]);
        return Club::all();
    }

    public function activate(Request $request): Collection
    {
        $club = Club::find($request->id);
        $club->update(['active' => true]);
        return Club::all();
    }

    public function list(): Collection
    {
        return Club::all();
    }
}
