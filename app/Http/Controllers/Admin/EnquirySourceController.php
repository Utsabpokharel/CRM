<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\EnquirySource;

class EnquirySourceController extends Controller
{

    public function index()
    {
        $source = EnquirySource::all();
        return view('admin.enquiry.source.index',compact('source'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.enquiry.source.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name'=>'required|string',
                'description'=>''
            ]
        );
        $source = new EnquirySource();
        $source->fill($data);
        $success = $source->save();
        if ($success) {
            return redirect()->route('EnquirySource.index')->with('success', 'New enquiry source added');
        } else {
            return redirect()->route('EnquirySource.index')->with('error', 'Sorry! there is an error adding  enquiry source');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $source = EnquirySource::findorfail($id);
        return view('admin.enquiry.source.edit',compact('source'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'name'=>'required|string',
                'description'=>''
            ]
        );
        $source = EnquirySource::findorfail($id);
        $source->fill($data);
        $success = $source->save();
        if ($success) {
            return redirect()->route('EnquirySource.index')->with('success', 'New enquiry source updated');
        } else {
            return redirect()->route('EnquirySource.index')->with('error', 'Sorry! there is an error updating  enquiry source');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $source = EnquirySource::findorfail($id);
        $success = $source->delete();
        if ($success) {
            return redirect()->route('EnquirySource.index')->with('success', 'Enquiry source Deleted successfully');
        } else {
            return redirect()->route('EnquirySource.index')->with('error', 'Sorry! there is an error deleting  enquiry source');
        }
    }

    public function ViewTrash()
    {
        $source = EnquirySource::onlyTrashed()->get();
        return view('admin.enquiry.source.index', compact('source'))->with('trashed', 'true');
    }

    public function restore($id)
    {
        $source = EnquirySource::onlyTrashed()->where('id', $id)->first();
        $source->restore();
        return redirect()->route('EnquirySource.index')->with('success', 'Restored seccessfully');

    }

    public function deleteTrash($id)
    {
        $source = EnquirySource::onlyTrashed()->where('id', $id)->first();
        $source->forcedelete();
        return back()->with('warning', 'Enquiry Source has been deleted from trashed');
    }
}
