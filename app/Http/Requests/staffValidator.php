<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class staffValidator extends FormRequest
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
            'fname'=>'required |min:2|max:20|alpha',
            'lname'=>'required |min:2|max:20|alpha',
            'gender'=>'required',
            'dob'=>'required',  
            'pp_photo'=>'nullable', 
            'permanent_address'=>'required',    
            'temporary_address'=>'required',
            'city'=>'required',   
            'department_id'=>'required',
            'title_id'=>'required',
            'level_id'=>'required',  
            'joined_date'=>'required',
            'email'=>'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            
        ];
    }
    public function messages()
    {
        return [
            'fname.required'=>'First Name field is required',
            'fname.min'=>'Minimum two character is required',
            'fname.max'=>'Maximum twenty character is required',
            'fname.alpha'=>'Only alphabet is accepted',

            'lname.required'=>'Last Name field is required',
            'lname.min'=>'Minimum two character is required',
            'lname.max'=>'Maximum twenty character is required',
            'lname.alpha'=>'Only alphabet is accepted'
        ];
    }
}
