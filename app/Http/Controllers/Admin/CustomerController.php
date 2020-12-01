<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Customer;

class CustomerController extends Controller
{
    public function index()
    {
    	$customer=Customer::all();
    	return view('admin.customer.index', compact('customer'));
    }
    public function create()
    {
    	return view('admin.customer.add');
    }
public function store(Request $request)
   { 
    	$request->validate([
         'fname'=>'required|alpha',
         'lname'=>'required|alpha',
         'gender'=>'required',
         'dob'=>'required',
         'password'=>'required',
         'city'=>'required',
         'district'=>'required',
         'temporaryaddress'=>'required|alpha',
         'permanentaddress'=>'required|alpha',
         'email'=>'required|email',
         'phone'=>'required|numeric',
         'mobile'=>'required|numeric',
         'customer_type'=>'required'
        ]);
         $data=$request->all();
         $imagepath="images/customer/";
         $data['image']=save_image($request->image,150,150,$imagepath);
        
         Customer::create($data);
         return redirect()->route('customer.index');
     }
     public function edit($id)
    {
        $customer=Customer::findorfail($id);
        return view('admin.customer.edit',compact('customer'));
    }
    public function update(Request $request,$id)
    {
        $request->validate([
        'fname'=>'required|alpha',
         'lname'=>'required|alpha',
         'gender'=>'required',
         'dob'=>'required',
         'password'=>'required',
         'city'=>'required',
         'district'=>'required',
         'temporaryaddress'=>'required|alpha',
         'permanentaddress'=>'required|alpha',
         'email'=>'required|email',
         'phone'=>'required|numeric|max:10|min:0',
         'mobile'=>'required|numeric|max:10|min:0',
         'customer_type'=>'required'
        ]);
        $customer=Customer::findorfail($id);
        $data=$request->except('_token','_method');
        Customer::where('id',$id)->update($data);
        return redirect()->route('customer.index');
    }
    public function destroy($id)
    {
     $customer=Customer::findorfail($id);
     $customer->delete();
        
    return back();
    }
}
