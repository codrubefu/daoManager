<?php

namespace App\Http\Controllers\TrainingClasses;

use App\Http\Controllers\Controller;
use App\Http\Requests\TrainingClassesRequest;
use App\Models\TrainingClasses;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TrainingClassesController extends Controller
{

    public function add(TrainingClassesRequest $trainingClassesRequest): TrainingClasses
    {
        return TrainingClasses::create($trainingClassesRequest->validated());
    }

    public function edit(Request $request,TrainingClassesRequest $trainingClassesRequest)
    {
        $trainingClass = $this->get($request);
        $trainingClass->update($trainingClassesRequest->validated());
        return $trainingClass;
    }

    public function get(Request $request): TrainingClasses
    {
        $TrainingClass = TrainingClasses::where(
            [
                'id' => $request->id,
                'club_id' => $request->user()->club_id
            ]
        )->first();

        abort_if(!$TrainingClass, 404, 'Training not found');
        return $TrainingClass;
    }


    public function list(Request $request): Collection|array
    {
        $parentUser = $request->user();
        if ($parentUser->club_id == null) {
            return [];
        }
        return TrainingClasses::where('club_id', $parentUser->club_id)->get();
    }

    public function delete(Request $request): JsonResponse
    {
        $TrainingClass = $this->get($request);
        $TrainingClass->delete();
        return new JsonResponse(null, 204);
    }
}
