<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\incomecategory;
use App\Http\Requests\incomecategoryValidator;


class incomecategorycontroller extends Controller
{
	public function view()
    {
    	$incomecategory=incomecategory::all();
    	return view('admin.incomecategory.view',compact('incomecategory'));
    }
    public function create()
    {
    	return view('admin.incomecategory.create');
    } 
    public function store(incomecategoryValidator $request)
    {
    	$data=$request->all();
    	incomecategory::create($data);
    	return redirect()->route('incomecategory.view')->with('success','Incomecategory Created Successfully');
    }
    public function edit($id)
    {
    	$incomecategory=incomecategory::findorfail($id);
    	return view('admin.incomecategory.edit',compact('incomecategory'));
    }
    public function update(incomecategoryValidator $request, $id)
    {
    	$data=$request->all();
    	$incomecategory=incomecategory::findorfail($id);
    	$incomecategory->update($data);
    	return redirect()->route('incomecategory.view')->with('success','Incomecategory Update Successfully');
    }
    public function destroy($id)
    {
    	$incomecategory=incomecategory::findorfail($id);
    	$incomecategory->delete();
    	return back()->with('flash_error','Deleted Successfully')->with('warning',"Incomecategory Deleted Successfully");
    }
   
}
