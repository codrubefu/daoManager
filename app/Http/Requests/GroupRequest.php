<?php

namespace App\Http\Requests;

use App\Traits\ValidatedTrait;
use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
{
    use ValidatedTrait;

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
        ];
    }
    public function validated($key = null, $default = null)
    {
        $validated = parent::validated();
        $validated['club_id'] = $this->user()->club_id ?? '';
        return $validated;
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The name field is required.',
            'description.required' => 'The description field is required.',
            'club_id.required' => 'The club_id field is required.',
        ];
    }
}

