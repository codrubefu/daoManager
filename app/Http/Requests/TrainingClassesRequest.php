<?php

namespace App\Http\Requests;

use App\Traits\ValidatedTrait;
use Illuminate\Foundation\Http\FormRequest;

class TrainingClassesRequest extends FormRequest
{
    use ValidatedTrait;

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
            'day_7' => []
        ];

        return $rules;
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The name field is required.'
        ];
    }
}
