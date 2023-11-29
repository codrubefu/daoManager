<?php

namespace App\Http\Controllers\TrainingClasses;

use App\Http\Controllers\Controller;
use App\Models\TrainingClasses;
use App\Models\User;
use App\Services\TrainingClassesService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TrainingClassesController extends Controller
{
    public function get(TrainingClasses $classes, Request $request): TrainingClasses
    {
        return $classes::find($request->id);
    }

    public function addOrEdit(Request $request, TrainingClasses $classes, TrainingClassesService $classesService): TrainingClasses|bool|JsonResponse
    {
        $parentUser = $request->user();
        $validate = $classesService->validate($request);

        if ($validate !== true) {
            return $validate;
        }

        if (isset($request->id)) {
            $classes = $classes::find($request->id);
            if ($classes->club_id != $parentUser->club_id) {
                return response()->json(['error' => 'nu ai dreputul sa modifici'], 500);
            }
        }

        foreach ($request->all() as $key => $value) {
            $classes->{$key} = $value;
        }

        $parentUser = $request->user();
        $classes->club_id = $parentUser->club_id;

        $classes->save();

        return $classes;
    }

    public function list(Request $request)
    {
        $parentUser = $request->user();
        $classes = TrainingClasses::where('club_id', $parentUser->club_id)->get();
        return $classes->toArray();
    }

    public function delete(Request $request, TrainingClasses $classes)
    {
        $classes = $classes::find($request->id);
        $parentUser = $request->user();

        if (!isset($classes->club_id)) {
            return response()->json(['error' => 'acest antrenament nu exista'], 500);
        }

        if ($classes->club_id != $parentUser->club_id) {
            return response()->json(['error' => 'nu ai dreputul sa stergi'], 500);
        }
        $classes->delete();

        return $this->list($request);
    }

    public function addUsers(Request $request, TrainingClasses $classes)
    {
        $parentUser = $request->user();
        $users = User::whereIn('id', $request->users)->where('club_id', $parentUser->club_id)->get();
        $addUsers=[];
        foreach ($users as $user) {
            $addUsers[] =$user->id;
        }

        $classes=$classes->find($request->id)->where('club_id', $parentUser->club_id)->first();
        try {
            $classes->users()->attach($addUsers,['date'=> date('Y-m-d')]);
        }catch (\Exception $e) {
            Log::error( $e->getMessage());
        }

        return $classes->users;

    }
}
