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
    public function addVendor()
    {

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
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'dateofbirth' => 'required',
            'registrationnumber' => 'required',
            'panvatnumber' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'city' => 'required',
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

        ]);
        $data = $request->all();

        $imagepath = 'images/vendors/';

        $data['image'] = save_image($request->image, 150, 150, $imagepath);
        $data['idproof'] = save_image($request->idproof, 150, 150, $imagepath);

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
        $vendor = Vendor::findOrfail($id);

        return view('admin.vendors.edit', compact('vendor'));
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
            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'dateofbirth' => 'required',
            'registrationnumber' => 'required',
            'panvatnumber' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'city' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'firstcontactperson' => 'required',
            'firstemail' => 'required',
            'firstphone' => 'required',
            'secondcontactperson' => 'required',
            'secondemail' => 'required',
            'secondphone' => 'required',
            'ifuser' => 'required',
            'idproof' => 'required',
            'vendor_type' => 'required',

        ]);
        $vendor = Vendor::find($id);
        /*$data = $request->except('_token', '_method', 'current_image', 'current_idproof');
        if ($request->hasFile('image')) {
            $data['image'] = save_image($request->image, 150, 150, $this->imagePath());
            delete_image($vendor->image, $this->imagePath());
        } else
            $data['image'] = $request->current_image;

        if ($request->hasFile('idproof')) {
            $data['idproof'] = save_image($request->idproof, 150, 150, $this->imagePath());
            delete_image($vendor->idproof, $this->imagePath());
        } else
            $data['idproof'] = $request->current_idproof;

        Vendor::where('id', $id)->update($data);*/
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
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', 'Deleted Successfully');
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
}