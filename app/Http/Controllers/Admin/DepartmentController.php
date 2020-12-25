<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\departmentValidator;
use Illuminate\Http\Request;
use App\Models\Admin\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $data = Department::all();
        return view('admin.department.index', compact("data"));
    }
    public function create()
    {
        return view('admin.department.add');
    }
    function store(departmentValidator $request)
    {
        $data = $request->all();
        Department::create($data);
        return redirect()->route('view_department')->with('success', 'Department Created successfully');
    }

    function edit($id)
    {
        $data = Department::findOrfail($id);
        return view("admin.department.edit", compact("data"));
    }
    function update($id, departmentValidator $request)
    {
        $data = Department::findOrfail($id);
        $data->update($request->all());
        return redirect()->route('view_department');
    }
    function destroy($id)
    {
        $data = Department::findOrfail($id);
        $data->delete();
        return redirect()->route('view_department')->with('success', 'Selected Level has been deleted');
    }
}
