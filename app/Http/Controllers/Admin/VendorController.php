<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;

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
    public function create(Request $request)
    {
        $vendor = Vendor::all();
        ini_set('memory_limit', '256M');
        if ($request->isMethod('post')) {
            $request->validate([
                'fname' => 'required',
                'lname' => 'required',
                'gender' => 'required',
                'dateofbirth' => 'required',
                'registrationnumber' => 'required',
                'panvatnumber' => 'required',
                'email' => 'required',
                'image' => 'required',
                'mobile' => 'required',
                'address1' => 'required',
                'vendor_type' => 'required',

            ]);
            $data = $request->all();
            //dd($data);
            $vendor = new Vendor;
            $vendor->fname = $data['fname'];
            $vendor->lname = $data['lname'];
            $vendor->gender = $data['gender'];
            $vendor->dateofbirth = $data['dateofbirth'];
            $vendor->registrationnumber = $data['registrationnumber'];
            $vendor->panvatnumber = $data['panvatnumber'];
            $vendor->email = $data['email'];
            $vendor->mobile = $data['mobile'];
            $vendor->address1 = $data['address1'];
            $vendor->vendor_type = $data['vendor_type'];
            $vendor->save();
            return redirect()->route('department.index');
        }

        return view('admin.vendors.add');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Vendor $vendor, $id, Request $request)
    {
        $vendor = Vendor::find($id);

        ini_set('memory_limit', '256M');
        if ($request->isMethod('post')) {
            $request->validate([
                'department_id' => 'required',
                'departmentname' => 'required',
            ]);
            $data = $request->all();
            $department = Vendor::findOrfail($id);
            $vendor->fname = $data['fname'];
            $vendor->lname = $data['lname'];
            $vendor->gender = $data['gender'];
            $vendor->dateofbirth = $data['dateofbirth'];
            $vendor->registrationnumber = $data['registrationnumber'];
            $vendor->panvatnumber = $data['panvatnumber'];
            $vendor->email = $data['email'];
            $vendor->mobile = $data['mobile'];
            $vendor->address1 = $data['address1'];
            $vendor->vendor_type = $data['vendor_type'];
            $vendor->save();


            return redirect()->route('vendor.index');
        }
        return view('admin.vendor.edit', compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        //
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
        return redirect()->route('vendors.index');
    }
}