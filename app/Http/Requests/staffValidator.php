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
            'fname'=>'required',
            'lname'=>'required',
            'gender'=>'required',
            'dob'=>'required',  
            'pp_photo'=>'nullable', 
            'permanent_address'=>'required',    
            'temporary_address'=>'required',
            'city'=>'required',  
            'phoneno'=>'',    
            'mobileno'=>'',  
            'department_id'=>'required',
            'title_id'=>'required',
            'level_id'=>'required',  
            'panno'=>'',
            'joined_date'=>'required',
            'email'=>'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'ifuser'=>'',
            'id_proof'=>'',
            'resume'=>'',
            'offer_letter'=>'',
            'joining_letter'=>'',
            'contract_agreement'=>''
        ];
    }
}
