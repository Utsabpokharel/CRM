<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class serviceValidator extends FormRequest
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
            'service_name' => 'required|min:3',
            'service_price' => 'required',
            'service_status' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'service_name.required' => 'Service Name is required',
            'service_name.min' => 'Minimum 3 Character is required',
            'service_price.required' => 'Service Price is required',
            'service_status.required' => 'Please Select Status'
        ];
    }
}
