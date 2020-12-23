<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Staff;
use App\Http\Requests\staffValidator;
use App\Models\Admin\Department;
use App\Models\Admin\title;
use App\Models\Admin\level;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff=Staff::all();
        return view('admin.staff.view', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels=level::all();
        $titles=title::all();
        $departments=Department::all();
        $district=$this->district();
        $city=$this->city();
        return view('admin.staff.add',compact('levels','titles','departments','district','city'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(staffValidator $request)
    {
        $data = $request->all();
        $data = $request->except("confirm_password");
        $password = Hash::make($request->password);
        $data['password'] = $password;
        if($request->hasFile('pp_photo'))
            {
                $staff_image_path='images/staff/';
                $data['pp_photo']=save_image($request->pp_photo,150,150,$staff_image_path);
            }
            
        Staff::create($data);
        return redirect()->route('staff.view')->with('success', 'Staff Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = Staff::findOrfail($id);
        $levels=level::all();
        $titles=title::all();
        $departments=Department::all();
        $district=$this->district();
        $city=$this->city();
        return view("admin.staff.edit", compact('staff','levels','titles','departments','district','city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data=$request->except('_token','confirm_password');
        Staff::where("id", $id)->update($data);
        return redirect()->route('staff.view')->with('success', 'Staff Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Staff::findOrfail($id);
        $data->delete();
        return redirect()->route('staff.view')->with("success", 'Delete Successfully');
    }

    public function trashedView()
    {
        $staff=Staff::onlyTrashed()->latest()->get();
        return view('admin.staff.view', compact('staff'))->with('trashed','true');


    }
    public function restore($id)
    {
        $staff=Staff::onlyTrashed()->where('id',$id)->first();
        $staff->restore();
        return redirect()->route('staff.view')->with('success','Staff restore successfully');
    }

    public function deleteTrash($id)
    {
        $staff=Staff::onlyTrashed()->where('id',$id)->first();
        $staff->forceDelete();
        return redirect()->route('staff.view')->with('warning','Permanent Delete Successfully');
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
