<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpensesValidator extends FormRequest
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
            'date'=>'required',
          'particular'=>'required',
          'amount'=>'required|numeric',
          'category_id'=>'required',
          'paid_by'=>'required',
          'mode_of_payment'=>'required',
          'expenditure'=>'required',
          'received_by'=>'required'

        ];
    }
}
