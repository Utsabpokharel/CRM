<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Award;
use App\Http\Requests\awardValidator;
use App\Models\Admin\Staff;
class AwardController extends Controller
{
    public function index()
    {
        $data=Award::all();
        return view('admin.award.view',compact('data'));
    }

    public function create()
    {
        $staffs=Staff::all();
        return view('admin.award.add',compact('staffs'));
    }

    public function store(awardValidator $request)
    {
        $data= $request->all();
        Award::create($data);
        return redirect()->route('award.view')->with('success', 'Award Created successfully');
    }

    public function edit($id)
    {
        $staffs=Staff::all();
        $award = Award::findOrfail($id);
        return view("admin.award.edit", compact('award','staffs'));
    }

    public function update(Request $request, $id)
    {
        $data=$request->except('_token');
        Award::where("id", $id)->update($data);
        return redirect()->route('award.view')->with('success', 'Award Updated successfully');
    }

    public function destroy($id)
    {
        $data = Award::findOrfail($id);
        $data->delete();
        return redirect()->route('award.view')->with("success", 'Delete Successfully');
    }
}
