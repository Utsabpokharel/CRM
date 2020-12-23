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

        $district=$this->district();
        $levels=level::all();
        $titles=title::all();
        $departments=Department::all();
        $city=$this->city();
        return view('admin.vendors.add',compact('levels','titles','departments','city','district'));

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
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'city' => 'required',
            'district' => 'required',
            'image' => '',
            'frontcitizenshipimage' => '',
            'backcitizenshipimage' => '',
            'address1' => 'required',
            'address2' => 'required',
            'firstcontactperson' => 'required',
            'firstemail' => 'required',
            'firstphone' => 'required',
            'secondcontactperson' => 'required',
            'secondemail' => 'required',
            'secondphone' => 'required',
            'ifuser' => 'required',
            'vendor_type' => 'required',
        ], [
            'fname.required' => 'First Name is required',
            'fname.min' => 'The First Name must be at least 3 characters.',
            'fname.max' => 'The First Name Name may not be greater than 20 characters.',
            'lname.min' => 'The Last Name must be at least 3 characters.',
            'lname.max' => 'The Last Name Name may not be greater than 20 characters.',
            'lname.required' => 'Last Name is required',

        ]);*/

        $data = $request->all();
        $data = $request->except('confirm_password');
        $password = Hash::make($request->password);
        $data['password'] = $password;

        $imagepath = 'images/vendors/';

        $data['image'] = save_image($request->image, 150, 150, $imagepath);
        $data['frontcitizenshipimage'] = save_image($request->frontcitizenshipimage, 150, 150, $imagepath);
        $data['backcitizenshipimage'] = save_image($request->backcitizenshipimage, 150, 150, $imagepath);

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
        $district=$this->district();
        $vendor = Vendor::findOrfail($id);
        $city=$this->city();
        return view('admin.vendors.edit', compact('vendor',compact('district','city')));
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
        $request->validate([
            'fname' => 'required|min:3|max:20|alpha',
            'lname' => 'required|min:3|max:20|alpha',
            'gender' => 'required',
            'dateofbirth' => 'required',
            'registrationnumber' => 'required',
            'panvatnumber' => 'required',
            'email' => 'required|email',
            'password' => '',
            'confirm_password' => '',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'city' => 'required',
            'district' => 'required',
            'image' => '',
            'frontendcitizenshipimage' => '',
            'backendcitizenshipimage' => '',
            'address1' => 'required',
            'address2' => 'required',
            'firstcontactperson' => 'required',
            'firstemail' => 'required|email',
            'firstphone' => 'required',
            'secondcontactperson' => 'required',
            'secondemail' => 'required|email',
            'secondphone' => 'required',
            'ifuser' => 'required',
            'vendor_type' => 'required',
        ], [
            'fname.required' => 'First Name is required',
            'fname.min' => 'The First Name must be at least 3 characters.',
            'fname.max' => 'The First Name Name may not be greater than 20 characters.',
            'lname.min' => 'The Last Name must be at least 3 characters.',
            'lname.max' => 'The Last Name Name may not be greater than 20 characters.',
            'lname.required' => 'Last Name is required',
        ]);
        $vendor = Vendor::find($id);

        $data = $request->except('image', 'frontcitizenshipimage', 'backcitizenshipimage');
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
