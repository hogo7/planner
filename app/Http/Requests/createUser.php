<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createUser extends FormRequest
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
            'name'      =>'bail|required|max:255'
            ,'email'    =>'string|required|email'
            ,'birth'    =>'required'
            ,'gender'   =>'required'
            ,'Phone'    =>'required|min:11|max:11'
            ,'password' =>'required|min:8|confirmed'
        ];
    }
}
