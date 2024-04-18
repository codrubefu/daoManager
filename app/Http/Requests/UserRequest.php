<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    public function rules()
    {

        $rules = [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'title' => [],
            'phone' => [],
            'address' => [],
            'city' => [],
            'country' => [],
            'zip' => [],
            'about' => [],
            'club_id' => [],
            'email' => [
                'required',
                'email',
                Rule::unique('users')->where(function ($query) {
                    $id = $this->route('id');
                    $query
                        ->where('club_id', $this->user()->club_id)
                        ->where('id','<>', $id);
                    ;
                    return $query;
                }),
            ],
        ];

        return $rules;
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
            'first_name.required' => 'The first name field is required.',
            'email.unique' => 'The email has already been taken.',
        ];
    }
}
