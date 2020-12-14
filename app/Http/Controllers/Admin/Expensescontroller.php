<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Expenses;
use App\Http\Requests\ExpensesValidator;
use App\Models\Admin\Expensescategory;


class Expensescontroller extends Controller
{
    //
    public function view()
    {
    	$expenses=Expenses::all(); 
    	return view('admin.expenses.view',compact('expenses'));
    }
    public function create()
    {
      $expensescategories=$this->getCategories();
    	return view('admin.expenses.create',compact('expensescategories'));
    }
    public function store(ExpensesValidator $request)
    {
    	$data=$request->all();
    	Expenses::create($data);
    	return redirect()->route('expenses.view')->with('success','Expenses Successfully Created');
    }
    public function edit($id)
    {
      $expensescategories=$this->getCategories();
    	$expenses=Expenses::findorfail($id);
    	return view('admin.expenses.edit',compact('expenses','expensescategories'));
    }
    public function update(Request  $request, $id)
    {
    	$data=$request->all();
    	$expenses=Expenses::findorfail($id);
    	$expenses->update($data);
    	return redirect()->route('expenses.view')->with('success','Update Successfully');
    }
    /*public function destroy($id)
    {
      $expenses=Expenses::findorfail($id);
      $expenses->delete();
      return back()->with('flash_error','Deleted Successfully')->with('warning',"Deleted Successfully");
    
    }*/
    
  public function viewtrashed()
  {
     $expenses=Expenses::onlyTrashed()->latest()->get();
      return view('admin.expenses.view',compact('expenses'))->with('trashed','true');
  }
  public function restore($id){
        $expenses = Expenses::onlyTrashed()->where('id', $id)->first();
        $expenses->restore();
        return redirect()->route('expenses.view')->with('flash_message', 'Expenses/Suppliers Has Been Restored');
    }

    public function destroy($id)
    {
      $expenses=Expenses::findorfail($id);
      $expenses->delete();
      return back()->with('flash_error','Deleted Successfully')->with('warning',"Deleted Successfully");
    
   }
   public function deletetrashed($id)
  {
    $expenses = Expenses::onlyTrashed()->where('id', $id)->first();
    $expenses->forcedelete();
    return back()->with('flash_error','Expenses has been deleted from trashed');

  }
   protected function getCategories()
   {
        return Expensescategory::all();
   }
 
}
