<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'            => 'required',
            'last_name'             => 'required',
            'email'                 => 'email|unique:users,email',
            'password'              => 'required|confirmed|min:6',
            'birth_date'            => 'date',
            'description'           => 'required',
            'phone'                 => 'required',
            'address'               => 'required',
            'role'                  => 'required|integer',
            'avatar'                => 'image',
        ];
    }
}
