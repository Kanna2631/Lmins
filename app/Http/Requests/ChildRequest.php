<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChildRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'child.name' => 'required|string|max:50',
            'child.birthday' => 'required|date|max:10',
            'child.gender' => 'required|string|max:1',
        ];
    }
}