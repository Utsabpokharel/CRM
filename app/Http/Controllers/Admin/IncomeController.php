<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Income;
use App\Models\Admin\incomecategory;

class IncomeController extends Controller
{
    public function view()
    {
    	$income=Income::all();
    	return view('admin.income.view',compact('income'));
    }
    public function create()
    {
      $categories=incomecategory::all();
    	return view('admin.income.create', compact('categories'));
    }
    public function store(Request $request)
    {
    	$data=$request->all();
    	Income::create($data);
    	return redirect()->route('income.view')->with('success','Income Successfully Created');
    }
    public function edit($id)
    {
      $categories=incomecategory::all();
    	$income=Income::findorfail($id);
    	return view('admin.income.edit',compact('income','categories'));
    }
     public function update(Request  $request, $id)
    {
    	$data=$request->all();
    	$income=Income::findorfail($id);
    	$income->update($data);
    	return redirect()->route('income.view')->with('success','Update Successfully');
    }
     public function viewtrashed()
  {
     $income=Income::onlyTrashed()->latest()->get();
      return view('admin.income.view',compact('income'))->with('trashed','true');
  }
  public function restore($id){
        $income = Income::onlyTrashed()->where('id', $id)->first();
        $income->restore();
        return redirect()->route('income.view')->with('flash_message', 'Income/Suppliers Has Been Restored');
    }

    public function destroy($id)
    {
      $income=Income::findorfail($id);
      $income->delete();
      return back()->with('flash_error','Deleted Successfully')->with('warning',"Deleted Successfully");

   }
   public function deletetrashed($id)
  {
    $income = Income::onlyTrashed()->where('id', $id)->first();
    $income->forcedelete();
    return back()->with('flash_error','Income has been deleted from trashed');

  }
}
