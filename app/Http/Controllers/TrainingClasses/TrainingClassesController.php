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

    public function get(Request $request,TrainingClasses $trainingClasses): TrainingClasses
    {
        $TrainingClass = $trainingClasses->where([
            'id' => $request->id,
            'club_id' => $request->user()->club_id
        ])->first();

        if ($TrainingClass) {
            $TrainingClass->user_ids = $TrainingClass->users()->pluck('users.id');
            return $TrainingClass;
        } else {
            abort(404, 'Training not found');
        }        return $TrainingClass;
    }


    public function list(Request $request,TrainingClasses $trainingClasses): Collection|array
    {
        $parentUser = $request->user();
        return $trainingClasses->get();
    }

    public function delete(Request $request): JsonResponse
    {
        $TrainingClass = $this->get($request);
        $TrainingClass->delete();
        return new JsonResponse(null, 204);
    }

    public function addUserToTrainingClass(Request $request,TrainingClasses $trainingClasses): JsonResponse
    {
        $trainingClassId = $request->trainingId;
        $userId = $request->userId;

        $trainingClass = $trainingClasses->findOrFail($trainingClassId);
        try {
            $trainingClass->users()->attach($userId, ['date' => now()->toDateString()]);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'User already added to this training class'], 400);
        }


        return new JsonResponse(null, 204);
    }
}
