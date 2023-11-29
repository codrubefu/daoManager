<?php

namespace App\Services;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TrainingClassesService
{
    public function validate(Request $request): bool|JsonResponse
    {
        try {
            $request->validate([
                'name' => ['required', 'max:100']
            ]);

            return true;
        } catch (\Exception $e) {

            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
