<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateEmployee extends Request
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
                'fname' => 'required|min:3|max:255',
                'lastname' => 'required|min:3|max:255',
                'email' => 'required|email|max:255',
                'username' => 'required|min:3|max:255|unique:employee',
                'password' => 'required|different:username|min:6|confirmed',
            ];
    }
}
