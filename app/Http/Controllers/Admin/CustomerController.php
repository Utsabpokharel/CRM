<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Customer;

class CustomerController extends Controller
{
    public function index()
    {
    	$customers=Customer::all();
    	return view('admin.customer.index', compact('customers'));
    }
    public function create()
    {
    	return view('admin.customer.add');
    }
public function store(Request $request)
   { 
    	$request->validate([
         'fname'=>'required',
         'lname'=>'required',
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
         
         $data['image']=save_image($request->image,150,150,$this->imagePath());
         $data['frontcitizenshipimage']=save_image($request->frontcitizenshipimage,150,150,$this->imagePath());
         $data['backcitizenshipimage']=save_image($request->backcitizenshipimage,150,150,$this->imagePath());
        
         Customer::create($data);
         return redirect()->route('customer.index')->with('success','User added successfully');
     }
     public function edit($id)
    {
        $customer=Customer::findorfail($id);
        return view('admin.customer.edit',compact('customer'));
    }
    public function update(Request $request,$id)
    {
        $request->validate([
        'fname'=>'required',
         'lname'=>'required',
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

        $customer=Customer::findorfail($id);
        $data=$request->except('_token','_method','current_image','current_frontcitizenshipimage','current_backcitizenshipimage');
        if($request->hasFile('image'))
        {
            $data['image']=save_image($request->image,150,150,$this->imagePath());
            delete_image($customer->image,$this->imagePath());


        }
        else
            $data['image']=$request->current_image;

        if($request->hasFile('frontcitizenshipimage'))
        {
            $data['frontcitizenshipimage']=save_image($request->image,150,150,$this->imagePath());
            delete_image($customer->image,$this->imagePath());


        }
        else
            $data['frontcitizenshipimage']=$request->current_frontcitizenshipimage;

       
        if($request->hasFile('backcitizenshipimage'))
        {
            $data['backcitizenshipimage']=save_image($request->image,150,150,$this->imagePath());
            delete_image($customer->image,$this->imagePath());


        }
        else
            $data['backcitizenshipimage']=$request->current_backcitizenshipimage; 

        Customer::where('id',$id)->update($data);
        return redirect()->route('customer.index')->with('success','Customer updated successfully');
    }
    public function destroy($id)
    {
     $customer=Customer::findorfail($id);
     

     $customer->delete();
        
    return back()->with('flash_error','delete Successfully')->with('warning','Deleted Successfully');
    }
    public function ViewTrash()
    {
        $customers=Customer::onlyTrashed()->get();
        return view('admin.customer.index',compact('customers'))->with('trashed','true');
    }
    public function restore($id)
    {
        $customer=Customer::onlyTrashed()->where('id',$id)->first();
        $customer->restore();
        return back()->with('success','Restored seccessfully');

    }
    public function deleteTrash($id)
    {
        $customer=Customer::onlyTrashed()->where('id',$id)->first();
        delete_image($customer->image,$this->imagePath());
        $customer->forcedelete();
        return back()->with('warning','Customer has been deleted from trashed');
    }

    protected function imagePath()
    {
        return "images/customer/";
    }
}
