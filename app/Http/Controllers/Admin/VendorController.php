<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Models\Admin\Department;
use App\Models\Admin\title;
use App\Models\Admin\level;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor = Vendor::all();
        return view('admin.vendors.view', compact('vendor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addVendor()
    {

        $district = $this->district();
        $levels = level::all();
        $titles = title::all();
        $departments = Department::all();
        $city = $this->city();
        return view('admin.vendors.add', compact('levels', 'titles', 'departments', 'city', 'district'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            /*$request->validate([
            'fname' => 'required|min:3|max:20|alpha',
            'lname' => 'required|min:3|max:20|alpha',
            'gender' => 'required',
            'dateofbirth' => 'required',
            'registrationnumber' => 'required',
            'panvatnumber' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'city' => 'required',
            'district' => 'required',
            'image' => 'required',
            'frontendcitizenshipimage' => 'required',
            'backendcitizenshipimage' => 'required',
            'resume' => 'required',
            'offer_letter' => 'required',
            'joining_letter' => 'required',
            'contract_agreement' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'firstcontactperson' => 'required',
            'firstemail' => 'required|email',
            'firstphone' => 'required',
            'secondcontactperson' => 'required',
            'secondemail' => 'required|email',
            'secondphone' => 'required',
            'vendor_type' => 'required',
        ], /*[
            'fname.required' => 'First Name is required',
            'fname.min' => 'The First Name must be at least 3 characters.',
            'fname.max' => 'The First Name Name may not be greater than 20 characters.',
            'lname.min' => 'The Last Name must be at least 3 characters.',
            'lname.max' => 'The Last Name Name may not be greater than 20 characters.',
            'lname.required' => 'Last Name is required',
            'gender.required' => 'Gender is required',
            'dateofbirth.required' => 'Date of birth is required',
            'registrationnumber.required' => 'Registration number is required',
            'panvatnumber.required' => 'PAN/VAT Number id required',
            'email.required' => 'Email is required',
            'phone.required' => 'Phone Number is required',
            'mobile.required' => 'Mobile Number is required',
            'city.required' => 'City is required',
            'district.required' => 'District is required',
            'address1.required' => 'Permanent Address is required',
            'address2.required' => 'Temporary Address is required',
            'firstcontactperson.required' => ' Name of First Contact Person is required',
            'firstemail.required' => 'Email of First Contact Person is required',
            'firstphone.required' => 'Phone number of First Contact Person is required',
            'secondcontactperson.required' => 'Name of Second Contact Person is required',
            'secondemail.required' => 'Email of Second Contact Person is required',
            'secondphone.required' => 'Phone of Second Contact Person is required',
            'vendor_type.required' => 'Vendor Type is required'

        )*/;

        $data = $request->all();
        // $data = $request->except('confirm_password');
        // $password = Hash::make($request->password);
        // $data['password'] = $password;

        $imagepath = 'images/vendors/';

        $data['image'] = save_image($request->image, 150, 150, $imagepath);
        $data['frontcitizenshipimage'] = save_image($request->frontcitizenshipimage, 150, 150, $imagepath);
        $data['backcitizenshipimage'] = save_image($request->backcitizenshipimage, 150, 150, $imagepath);
        $data['resume'] = save_image($request->resume, 150, 150, $imagepath);
        $data['offer_letter'] = save_image($request->offer_letter, 150, 150, $imagepath);
        $data['joining_letter'] = save_image($request->joining_letter, 150, 150, $imagepath);
        $data['contract_agreement'] = save_image($request->contract_agreement, 150, 150, $imagepath);

        Vendor::create($data);
        return redirect()->route('vendors.view')->with('success', 'Vendor added sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function editVendor($id)
    {
        $district = $this->district();
        $vendor = Vendor::findOrfail($id);
        $city = $this->city();
        return view('admin.vendors.edit', compact('district', 'vendor', 'city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*$request->validate([
            'fname' => 'required|min:3|max:20|alpha',
            'lname' => 'required|min:3|max:20|alpha',
            'gender' => 'required',
            'dateofbirth' => 'required',
            'registrationnumber' => 'required',
            'panvatnumber' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'city' => 'required',
            'district' => 'required',
            'image' => '',
            'frontendcitizenshipimage' => '',
            'backendcitizenshipimage' => '',
            'resume' => '',
            'offer_letter' => '',
            'joining_letter' => '',
            'contract_agreement' => '',
            'address1' => 'required',
            'address2' => 'required',
            'firstcontactperson' => 'required',
            'firstemail' => 'required|email',
            'firstphone' => 'required',
            'secondcontactperson' => 'required',
            'secondemail' => 'required|email',
            'secondphone' => 'required',
            'vendor_type' => 'required',
        ], [
            'fname.required' => 'First Name is required',
            'fname.min' => 'The First Name must be at least 3 characters.',
            'fname.max' => 'The First Name Name may not be greater than 20 characters.',
            'lname.min' => 'The Last Name must be at least 3 characters.',
            'lname.max' => 'The Last Name Name may not be greater than 20 characters.',
            'lname.required' => 'Last Name is required',
            'gender.required' => 'Gender is required',
            'dateofbirth.required' => 'Date of birth is required',
            'registrationnumber.required' => 'Registration number is required',
            'panvatnumber.required' => 'PAN/VAT Number id required',
            'email.required' => 'Email is required',
            'phone.required' => 'Phone Number is required',
            'mobile.required' => 'Mobile Number is required',
            'city.required' => 'City is required',
            'district.required' => 'District is required',
            'address1.required' => 'Permanent Address is required',
            'address2.required' => 'Temporary Address is required',
            'firstcontactperson.required' => ' Name of First Contact Person is required',
            'firstemail.required' => 'Email of First Contact Person is required',
            'firstphone.required' => 'Phone number of First Contact Person is required',
            'secondcontactperson.required' => 'Name of Second Contact Person is required',
            'secondemail.required' => 'Email of Second Contact Person is required',
            'secondphone.required' => 'Phone of Second Contact Person is required',
            'vendor_type.required' => 'Vendor Type is required'
        ]);*/
        $vendor = Vendor::find($id);

        $data = $request->except('image', 'frontcitizenshipimage', 'backcitizenshipimage', 'resume', 'offer_letter', 'joining_letter', 'contract_agreement');
        if ($request->hasFile('image')) {
            $data['image'] = save_image($request->image, 150, 150, $this->imagePath());
            delete_image($vendor->image, $this->imagePath());
        } else {
            $data['image'] = $request->current_image;
        }

        if ($request->hasFile('frontcitizenshipimage')) {
            $data['frontcitizenshipimage'] = save_image($request->frontcitizenshipimage, 150, 150, $this->imagePath());
            delete_image($vendor->frontcitizenshipimage, $this->imagePath());
        } else {

            $data['frontcitizenshipimage'] = $request->current_frontcitizenshipimage;
        }
        if ($request->hasFile('backcitizenshipimage')) {
            $data['backcitizenshipimage'] = save_image($request->backcitizenshipimage, 150, 150, $this->imagePath());
            delete_image($vendor->backcitizenshipimage, $this->imagePath());
        } else {

            $data['backcitizenshipimage'] = $request->current_backcitizenshipimage;
        }
        if ($request->hasFile('resume')) {
            $data['resume'] = save_image($request->resume, 150, 150, $this->imagePath());
            delete_image($vendor->resume, $this->imagePath());
        } else {

            $data['resume'] = $request->current_resume;
        }
        if ($request->hasFile('offer_letter')) {
            $data['offer_letter'] = save_image($request->offer_letter, 150, 150, $this->imagePath());
            delete_image($vendor->offer_letter, $this->imagePath());
        } else {

            $data['offer_letter'] = $request->current_offer_letter;
        }
        if ($request->hasFile('joining_letter')) {
            $data['joining_letter'] = save_image($request->joining_letter, 150, 150, $this->imagePath());
            delete_image($vendor->joining_letter, $this->imagePath());
        } else {

            $data['joining_letter'] = $request->current_joining_letter;
        }
        if ($request->hasFile('contract_agreement')) {
            $data['contract_agreement'] = save_image($request->contract_agreement, 150, 150, $this->imagePath());
            delete_image($vendor->contract_agreement, $this->imagePath());
        } else {

            $data['contract_agreement'] = $request->current_contract_agreement;
        }

        $vendor->update($data);
        return redirect()->route('vendors.view', compact('vendor'))->with('success', 'Vendor updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendor = Vendor::find($id);
        $vendor->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('success', 'Deleted Successfully');
    }
    public function ViewTrash()
    {
        $vendor = Vendor::onlyTrashed()->get();
        return view('admin.vendors.view', compact('vendor'))->with('trashed', 'true');
    }
    public function restore($id)
    {
        $vendor = Vendor::onlyTrashed()->where('id', $id)->first();
        $vendor->restore();
        return back()->with('success', 'Restored successfully');
    }
    public function deleteTrash($id)
    {
        $vendor = Vendor::onlyTrashed()->where('id', $id)->first();
        delete_image($vendor->image, $this->imagePath());
        $vendor->forcedelete();
        return back()->with('warning', 'Vendor has been deleted from trashed');
    }

    protected function imagePath()
    {
        return "images/vendors/";
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