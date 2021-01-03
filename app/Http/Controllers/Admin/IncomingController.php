<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Incoming;
use App\Models\Admin\staff;

class IncomingController extends Controller
{
    public function index()
    {
        $incomings = Incoming::all();

        return view('admin.Call Log.incoming.view', compact('incomings'));
    }
    public function create()
    {
        $incomings = Incoming::all();
        $staffs = staff::all();
        return view('admin.Call Log.incoming.add', compact('incomings', 'staffs'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        Incoming::create($data);
        return redirect()->route('incoming.view')->with('success', 'Incoming Call Log Created Successfully');
    }
    public function edit($id)
    {
        $incomings = Incoming::findorfail($id);
        $staffs = staff::all();
        return view('admin.Call Log.incoming.edit', compact('incomings', 'staffs'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $incomings = Incoming::findorfail($id);
        $incomings->update($data);
        return redirect()->route('incoming.view')->with('success', 'Incoming Call Log Updated Successfully');
    }
    public function destroy($id)
    {
        $incomings = Incoming::findorfail($id);
        $incomings->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', "Incoming Deleted Successfully");
    }
    public function ViewTrash()
    {
        $incomings = Incoming::onlyTrashed()->get();
        return view('admin.Call Log.incoming.view', compact('incomings'))->with('trashed', 'true');
    }
    public function restore($id)
    {
        $incomings = Incoming::onlyTrashed()->where('id', $id)->first();
        $incomings->restore();
        return back()->with('success', 'Restored successfully');
    }
    public function deleteTrash($id)
    {
        $incomings = Incoming::onlyTrashed()->where('id', $id)->first();
        $incomings->forcedelete();
        return back()->with('warning', 'Incoming Call Log has been deleted from trashed');
    }
}
