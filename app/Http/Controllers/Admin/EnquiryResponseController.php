<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\EnquiryResponse;

class EnquiryResponseController extends Controller
{

    public function index()
    {
        $response = EnquiryResponse::all();
        return view('admin.enquiry.response.index',compact('response'));
    }


    public function create()
    {
        return view('admin.enquiry.response.add');
    }


    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name'=>'required|string',
                'description'=>''
            ]
        );
        $response = new EnquiryResponse();
        $response->fill($data);
        $success = $response->save();
        if ($success) {
            return redirect()->route('EnquiryResponse.index')->with('success', 'New enquiry response added');
        } else {
            return redirect()->route('EnquiryResponse.index')->with('error', 'Sorry! there is an error adding  enquiry response');
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $response = EnquiryResponse::findorfail($id);
        return view('admin.enquiry.response.edit',compact('response'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'name'=>'required|string',
                'description'=>''
            ]
        );
        $response = EnquiryResponse::findorfail($id);
        $response->fill($data);
        $success = $response->save();
        if ($success) {
            return redirect()->route('EnquiryResponse.index')->with('success', 'New enquiry response updated');
        } else {
            return redirect()->route('EnquiryResponse.index')->with('error', 'Sorry! there is an error updating  enquiry response');
        }
    }

   
    public function destroy($id)
    {
        $response = EnquiryResponse::findorfail($id);
        $success = $response->delete();
        if ($success) {
            return redirect()->route('EnquiryResponse.index')->with('success', 'Enquiry response Deleted successfully');
        } else {
            return redirect()->route('EnquiryResponse.index')->with('error', 'Sorry! there is an error deleting  enquiry response');
        }
    }

    public function ViewTrash()
    {
        $response = EnquiryResponse::onlyTrashed()->get();
        return view('admin.enquiry.response.index', compact('response'))->with('trashed', 'true');
    }

    public function restore($id)
    {
        $response = EnquiryResponse::onlyTrashed()->where('id', $id)->first();
        $response->restore();
        return redirect()->route('EnquiryResponse.index')->with('success', 'Restored seccessfully');

    }

    public function deleteTrash($id)
    {
        $response = EnquiryResponse::onlyTrashed()->where('id', $id)->first();
        $response->forcedelete();
        return back()->with('warning', 'Enquiry Response has been deleted from trashed');
    }
}
