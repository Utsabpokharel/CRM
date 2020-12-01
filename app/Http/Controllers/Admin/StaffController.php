<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Staff;
use App\Http\Requests\staffValidator;
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
        return view('admin.staff.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(staffValidator $request)
    {
        $data = $request->except("confirm_password");
        if($request->hasFile('pp_photo'))
        {$staff_image_path='images/staff/';
            $data['pp_photo']=save_image($request->pp_photo,150,150,$staff_image_path);}

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
        return view("admin.staff.edit", compact('staff'));
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
        $data['city']='Kathmandu';
        $data['department_id']=2;
        $data['level_id']=2;
        $data['title_id']=2;
       
       
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
}
