<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class departmentValidator extends FormRequest
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
            'dep_name' => 'required|min:3',
            // max and min 

        ];
    }
    public function messages()
    {
        return [
            'dep_name.required' => 'Department Name is required',
            'dep_name.min' => 'Minimum 3 Character is required'

        ];
    }
}
