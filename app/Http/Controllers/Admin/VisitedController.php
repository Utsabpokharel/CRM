<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Visited;
use App\Models\Admin\staff;

class VisitedController extends Controller
{
    public function index()
    {
        $visiteds = Visited::all();
        $staffs = staff::all();
        return view('admin.Call Log.visited.view', compact('visiteds', 'staffs'));
    }
    public function create()
    {
        $visiteds = Visited::all();
        $staffs = staff::all();
        return view('admin.Call Log.visited.add', compact('visiteds', 'staffs'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        Visited::create($data);
        return redirect()->route('visited.view')->with('success', 'Visited Call Log Created Successfully');
    }
    public function edit($id)
    {
        $visiteds = Visited::findorfail($id);
        $staffs = Staff::all();
        return view('admin.Call Log.visited.edit', compact('visiteds', 'staffs'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $visiteds = Visited::findorfail($id);
        $visiteds->update($data);
        return redirect()->route('visited.view')->with('success', 'Visited Call Log Updated Successfully');
    }
    public function destroy($id)
    {
        $visiteds = Visited::findorfail($id);
        $visiteds->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', "Visited Call Log Deleted Successfully");
    }
    public function ViewTrash()
    {
        $visiteds = Visited::onlyTrashed()->get();
        return view('admin.Call Log.visited.view', compact('visiteds'))->with('trashed', 'true');
    }
    public function restore($id)
    {
        $visiteds = Visited::onlyTrashed()->where('id', $id)->first();
        $visiteds->restore();
        return back()->with('success', 'Restored successfully');
    }
    public function deleteTrash($id)
    {
        $visiteds = Visited::onlyTrashed()->where('id', $id)->first();
        $visiteds->forcedelete();
        return back()->with('warning', 'Visited Call Log has been deleted from trashed');
    }
}
