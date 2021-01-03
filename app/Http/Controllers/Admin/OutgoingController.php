<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Outgoing;
use App\Models\Admin\staff;

class OutgoingController extends Controller
{
    public function index()
    {
        $outgoings = Outgoing::all();
        $staffs = staff::all();

        return view('admin.Call Log.outgoing.view', compact('outgoings', 'staffs'));
    }
    public function create()
    {
        $outgoings = Outgoing::all();
        $staffs = staff::all();
        return view('admin.Call Log.outgoing.add', compact('outgoings', 'staffs'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        Outgoing::create($data);
        return redirect()->route('outgoing.view')->with('success', 'Outgoing Call Log Created Successfully');
    }
    public function edit($id)
    {
        $outgoings = Outgoing::findorfail($id);
        $staffs = staff::all();
        return view('admin.Call Log.outgoing.edit', compact('outgoings', 'staffs'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $outgoings = Outgoing::findorfail($id);
        $outgoings->update($data);
        return redirect()->route('outgoing.view')->with('success', 'Outgoing Call Log Updated Successfully');
    }
    public function destroy($id)
    {
        $outgoings = Outgoing::findorfail($id);
        $outgoings->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', "Outgoing Deleted Successfully");
    }
    public function ViewTrash()
    {
        $outgoings = Outgoing::onlyTrashed()->get();
        return view('admin.Call Log.outgoing.view', compact('outgoings'))->with('trashed', 'true');
    }
    public function restore($id)
    {
        $outgoings = Outgoing::onlyTrashed()->where('id', $id)->first();
        $outgoings->restore();
        return back()->with('success', 'Restored successfully');
    }
    public function deleteTrash($id)
    {
        $outgoings = Outgoing::onlyTrashed()->where('id', $id)->first();
        $outgoings->forcedelete();
        return back()->with('warning', 'Outgoing Call Log has been deleted from trashed');
    }
}