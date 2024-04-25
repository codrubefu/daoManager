<?php

namespace App\Http\Requests;

use App\Services\HelpFunctionService;
use App\Traits\ValidatedTrait;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class TrainingClassesRequest extends FormRequest
{
    use ValidatedTrait;

    private HelpFunctionService $helpFunctionService;

    public function __construct(HelpFunctionService $helpFunctionService)
    {
        $this->helpFunctionService = $helpFunctionService;
    }

    public function rules()
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'description' => [],
            'day_1' => [],
            'day_2' => [],
            'day_3' => [],
            'day_4' => [],
            'day_5' => [],
            'day_6' => [],
            'day_7' => [],
            'time_from' => [],
            'time_to' => []
        ];

        return $rules;
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The name field is required.'
        ];
    }

    /**
     * @throws ValidationException
     */
    public function validated($key = null, $default = null)
    {
        $validated = parent::validated();
        $validated['time_from'] = $this->helpFunctionService->transformToTime($validated['time_from']);
        $validated['time_to'] = $this->helpFunctionService->transformToTime($validated['time_to']);
        $validated['club_id'] = $this->user()->club_id ?? '';

        return $validated;
    }
}
