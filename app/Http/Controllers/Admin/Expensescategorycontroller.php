<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Expensescategory;
use App\Http\Requests\expensescategoryValidator;

class Expensescategorycontroller extends Controller
{
    //
    public function view()
    {
    	$expensescategory=Expensescategory::all();
    	return view('admin.expensescategory.view',compact('expensescategory'));
    }
    public function create()
    {
    	return view('admin.expensescategory.create');

    }
    public function store(expensescategoryValidator $request)
    {
    	$data=$request->all();
    	Expensescategory::create($data);
    	return redirect()->route('expensescategory.view')->with('success','Expensescategory Created Successfully');
    }
    public function edit($id)
    {
    	$expensescategory=Expensescategory::findorfail($id);
    	return view('admin.expensescategory.edit',compact('expensescategory'));
    }
    public function update(expensescategoryValidator $request, $id)
    {
    	$data=$request->all();
    	$expensescategory=Expensescategory::findorfail($id);
    	$expensescategory->update($data);
    	return redirect()->route('expensescategory.view')->with('success','Expensescategory Update Successfully');
    }
    public function destroy($id)
    {
    	$expensescategory=Expensescategory::findorfail($id);
    	$expensescategory->delete();
    	return back()->with('flash_error','Deleted Successfully')->with('warning',"Deleted Successfully");
    }
    
}
