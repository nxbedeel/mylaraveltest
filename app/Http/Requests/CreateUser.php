<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class CreateUser extends Request
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
            //
            'name' => 'required|min:3|max:255',
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required|confirmed|min:5',
            'password_confirmation' => 'required|min:5'
        ];
    }
}
