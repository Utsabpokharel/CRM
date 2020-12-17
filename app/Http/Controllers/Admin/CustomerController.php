<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Customer;
use Illuminate\Support\Facades\DB;
use Validate;
class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customer.index', compact('customers'));
    }

    public function create()
    {
        $district=$this->district();
        $city=$this->city();
        return view('admin.customer.add',compact('district','city'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|min:3|max:20|alpha',
            'lname' => 'required|min:3|max:20|alpha',
            'gender' => 'required',
            'dob' => 'required',
            'password' => 'required',
            'city' => 'required',
            'district' => 'required',
            'temporaryaddress' => 'required',
            'permanentaddress' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'customer_type' => 'required'
        ],[
            'fname.required'=>'First Name is required',
            'fname.min'=>'The First Name must be at least 3 characters.',
            'fname.max'=>'The First Name Name may not be greater than 20 characters.',
            'lname.min'=>'The Last Name must be at least 3 characters.',
            'lname.max'=>'The Last Name Name may not be greater than 20 characters.',
            'lname.required'=>'Last Name is required',
            'gender.required'=>'Gender is required',
            'dob.required'=>'Date of Birth  is required',
            'password.required'=>'Password is required',
            'city.required'=>'City is required',
            'district.required'=>'District is required',
            'temporaryaddress.required'=>'Temporary address is required',
            'permanentaddress.required'=>'Permanent address is required',
            'email.required'=>'Email is required',
            'phone.required'=>'Phone Number is required',
            'mobile.required'=>'Mobile Number is required',
            'customer_type.required'=>'Customer Type is required'


             ]);
        $data = $request->all();
        // $customers->password = Hash::make('super123');

        $data['image'] = save_image($request->image, 150, 150, $this->imagePath());
        $data['frontcitizenshipimage'] = save_image($request->frontcitizenshipimage, 150, 150, $this->imagePath());
        $data['backcitizenshipimage'] = save_image($request->backcitizenshipimage, 150, 150, $this->imagePath());

        Customer::create($data);
        return redirect()->route('customer.index')->with('success', 'Customer added successfully');
    }

    public function edit($id)
    {
        $district=$this->district();
        $customer = Customer::findorfail($id);
        $city=$this->city();
        return view('admin.customer.edit', compact('customer',compact('district','city')));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fname' => 'required|min:3|max:20|alpha',
            'lname' => 'required|min:3|max:20|alpha',
            'gender' => 'required',
            'dob' => 'required',

            'city' => 'required',
            'district' => 'required',
            'temporaryaddress' => 'required',
            'permanentaddress' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'customer_type' => 'required'
        ],[
            'fname.required'=>'First Name is required',
             'fname.min'=>'The First Name must be at least 3 characters.',
            'fname.max'=>'The First Name Name may not be greater than 20 characters.',
            'lname.min'=>'The Last Name must be at least 3 characters.',
            'lname.max'=>'The Last Name Name may not be greater than 20 characters.',
            'lname.required'=>'Last Name is required',
            'gender.required'=>'Gender is required',
            'dob.required'=>'Date of Birth  is required',

            'city.required'=>'City is required',
            'district.required'=>'District is required',
            'temporaryaddress.required'=>'Temporary address is required',
            'permanentaddress.required'=>'Permanent address is required',
            'email.required'=>'Email is required',
            'phone.required'=>'Phone Number is required',
            'mobile.required'=>'Mobile Number is required',
            'customer_type.required'=>'Customer Type is required'


             ]);

        $customer = Customer::findorfail($id);
        $data = $request->except('_token', '_method', 'current_image', 'current_frontcitizenshipimage', 'current_backcitizenshipimage');
        if ($request->hasFile('image')) {
            $data['image'] = save_image($request->image, 150, 150, $this->imagePath());
            delete_image($customer->image, $this->imagePath());


        } else
            $data['image'] = $request->current_image;

        if ($request->hasFile('frontcitizenshipimage')) {
            $data['frontcitizenshipimage'] = save_image($request->image, 150, 150, $this->imagePath());
            delete_image($customer->image, $this->imagePath());


        } else
            $data['frontcitizenshipimage'] = $request->current_frontcitizenshipimage;


        if ($request->hasFile('backcitizenshipimage')) {
            $data['backcitizenshipimage'] = save_image($request->image, 150, 150, $this->imagePath());
            delete_image($customer->image, $this->imagePath());


        } else
            $data['backcitizenshipimage'] = $request->current_backcitizenshipimage;

        Customer::where('id', $id)->update($data);
        return redirect()->route('customer.index')->with('success', 'Customer updated successfully');
    }

    public function destroy($id)
    {
        $customer = Customer::findorfail($id);


        $customer->delete();

        return back()->with('flash_error', 'delete Successfully')->with('warning', 'Deleted Successfully');
    }

    public function ViewTrash()
    {
        $customers = Customer::onlyTrashed()->get();
        return view('admin.customer.index', compact('customers'))->with('trashed', 'true');
    }

    public function restore($id)
    {
        $customer = Customer::onlyTrashed()->where('id', $id)->first();
        $customer->restore();
        return back()->with('success', 'Restored seccessfully');

    }

    public function deleteTrash($id)
    {
        $customer = Customer::onlyTrashed()->where('id', $id)->first();
        delete_image($customer->image, $this->imagePath());
        $customer->forcedelete();
        return back()->with('warning', 'Customer has been deleted from trashed');
    }

    protected function imagePath()
    {
        return "images/customer/";
    }
    protected function district()
    {
          return DB::table('districts')->get();
    }

    protected function city()
    {
        return DB::table('cities')->get();
    }
}
