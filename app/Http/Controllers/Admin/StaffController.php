<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Staff;
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
    public function store(Request $request)
    {
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'gender'=>'required',
            'dob'=>'required',  
            'pp_photo'=>'', 
            'permanent_address'=>'required',    
            'temporary_address'=>'required',
            'city'=>'required',  
            'phoneno'=>'',    
            'mobileno'=>'',  
            'department_id'=>'required',
            'title_id'=>'required',
            'level_id'=>'required',  
            'panno'=>'',
            'joined_date'=>'required',
            'email'=>'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'ifuser'=>'',
            'id_proof'=>'',
            'resume'=>'',
            'offer_letter'=>'',
            'joining_letter'=>'',
            'contract_agreement'=>''
            ]);
        $data = $request->except("confirm_password");
        Staff::create($data);
        return redirect()->route('staff.view')->with('flash_message', 'Staff Created successfully');
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
        $request->validate([
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
        Staff::where("id", $id)->update($data);
        return redirect()->route('staff.view')->with('flash_message', 'Staff Updated successfully');
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
        return redirect()->route('staff.view')->with("flash_error", 'Delete Successfully');
    }
}
