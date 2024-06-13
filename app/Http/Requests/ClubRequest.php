<?php

namespace App\Http\Requests;

use App\Traits\ValidatedTrait;
use Illuminate\Foundation\Http\FormRequest;

class ClubRequest extends FormRequest
{

    public function rules()
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'cui' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ];

        if ($this->isMethod('post')) {
            $rules['email'][] = 'unique:clubs';
        } else {
            $rules['email'][] = 'unique:clubs,email,' . $this->id;
        }

        return $rules;
    }

}
