<?php

namespace App\Http\Controllers\TrainingClasses;

use App\Http\Controllers\Controller;
use App\Http\Requests\TrainingClassesRequest;
use App\Models\TrainingClasses;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class TrainingClassesController extends Controller
{

    public function add(TrainingClassesRequest $trainingClassesRequest): TrainingClasses
    {
        return TrainingClasses::create($trainingClassesRequest->validated());
    }

    public function get(TrainingClasses $classes, Request $request): TrainingClasses
    {
        return $classes::find($request->id);
    }

    public function list(Request $request): Collection
    {
        $parentUser = $request->user();

        if ($parentUser->club_id == null) {
            return [];
        }

        $users = TrainingClasses::where('club_id', $parentUser->club_id)->get();

        return $users->toArray();
        return TrainingClasses::all();
    }

}
