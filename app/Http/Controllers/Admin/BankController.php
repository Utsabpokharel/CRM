<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Bank;
use App\Models\Admin\user;
use Validate;

class BankController extends Controller
{
    public function index()
    {

        $banks = Bank::all();

        return view('admin.bankaccount.index', compact('banks'));
    }

    public function create()
    {
        $users = user::all();
        return view('admin.bankaccount.add', compact('users'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'accountholder_name' => 'required|min:3|max:50',
            'bank_name' => 'required',
            'branch_name' => 'required',
            'account_number' => 'required|regex:/^([0-9]*)$/|min:10',

        ], [
            'user_id.required'=>'User Name is required',
            'accountholder_name.min' => 'The Account Holder Name must be at least 3 characters.',
            'accountholder_name.max' => 'The Account Holder Name Name may not be greater than 50 characters.',
            'accountholder_name.required' => 'Account Holder Name is required',
            'bank_name.required' => 'Bank Name is required',
            'account_number.required' => 'Account Number is required',



        ]);
        $data = $request->all();


        Bank::create($data);
        return redirect()->route('bank.index')->with('success', 'Bank Account added successfully');
    }

    public function edit($id)
    {
        $users = user::all();
        $bank = Bank::findorfail($id);
        return view('admin.bankaccount.edit', compact('bank'), compact('users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'accountholder_name' => 'required|min:3|max:20|alpha',
            'bank_name' => 'required',
            'branch_name' => 'required',
            'account_number' => 'required|regex:/^([0-9]*)$/|min:10',

        ], [
            'user_id.required'=>'User Name is required',
            'accountholder_name.min' => 'The Account Holder Name must be at least 3 characters.',
            'accountholder_name.max' => 'The Account Holder Name Name may not be greater than 20 characters.',
            'accountholder_name.required' => 'Account Holder Name is required',
            'bank_name.required' => 'Bank Name is required',
            'account_number.required' => 'Account Number is required',



        ]);

        $bank = Bank::findorfail($id);
        $data = $request->except('_token', '_method');


        Bank::where('id', $id)->update($data);
        return redirect()->route('bank.index')->with('success', 'Bank Account updated successfully');
    }

    public function destroy($id)
    {
        $bank = Bank::findorfail($id);


        $bank->delete();

        return back()->with('flash_error', 'delete Successfully')->with('warning', 'Deleted Successfully');
    }

    public function ViewTrash()
    {
        $banks = Bank::onlyTrashed()->get();
        return view('admin.bankaccount.index', compact('banks'))->with('trashed', 'true');
    }

    public function restore($id)
    {
        $bank = Bank::onlyTrashed()->where('id', $id)->first();
        $bank->restore();
        return back()->with('success', 'Restored seccessfully');
    }

    public function deleteTrash($id)
    {
        $bank = Bank::onlyTrashed()->where('id', $id)->first();

        $bank->forcedelete();
        return back()->with('warning', 'Bank Account has been deleted from trashed');
    }
}
