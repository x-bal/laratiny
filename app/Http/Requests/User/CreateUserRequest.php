<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => 'required|string|unique:users|min:3',
            'name' => 'required|string',
            'password' => 'required|string|min:6',
            'level' => 'required|string',
            'foto' => 'required|mimes:jpg, jpeg, png'
        ];
    }
}
