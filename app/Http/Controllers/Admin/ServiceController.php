<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\serviceValidator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $data = Service::all();
        return view('admin.services.index', compact("data"));
    }
    public function create()
    {
        $data = Service::latest()->get();
        return view('admin.services.add', compact('data'));
    }
    function store(serviceValidator $request)
    {
        $data = $request->all();
        Service::create($data);
        return redirect()->route('view_service')->with('success', 'Department Created successfully');
    }
    function edit($id)
    {
        $data = Service::findOrfail($id);
        return view("admin.department.edit", compact("data"));
    }
    function update($id, departmentValidator $request)
    {
        $data = Service::findOrfail($id);
        $data->update($request->all());
        return redirect()->route('view_department');
    }
    function destroy($id)
    {
        $data = Service::findOrfail($id);
        $data->delete();
        return back();
    }
}
