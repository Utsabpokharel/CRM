<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Enquiry;
use App\Models\Admin\EnquiryCategory;
use App\Models\Admin\EnquirySource;
use App\Models\Admin\Customer;

class EnquiryController extends Controller
{

    public function index()
    {
        $enquiry = Enquiry::all();
        //        dd($enquiry);
        return view('admin.enquiry.index', compact('enquiry'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = EnquiryCategory::all();
        $source = EnquirySource::all();
        $customer = Customer::all();
        return view('admin.enquiry.add', compact('category', 'source', 'customer'));
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
                'is_customer' => '',
                'customer_id' => '',
                'name' => '',
                'email' => '',
                'phone' => '',
                'date' => 'required|date',
                'time' => 'required',
                'category_id' => 'required',
                'source_id' => 'required',
                'remarks' => ''
            ]
        );
        $enquiry = new Enquiry();
        $enquiry->fill($data);
        $success = $enquiry->save();
        if ($success) {
            return redirect()->route('Enquiry.index')->with('success', 'New enquiry enquiry added');
        } else {
            return redirect()->route('Enquiry.index')->with('error', 'Sorry! there is an error adding  enquiry enquiry');
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
        $category = EnquiryCategory::all();
        $source = EnquirySource::all();
        $customer = Customer::all();
        $enquiry = Enquiry::findorfail($id);
        return view('admin.enquiry.edit', compact('enquiry', 'source', 'category', 'customer'));
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
                'is_customer' => '',
                'customer_id' => '',
                'name' => '',
                'email' => '',
                'phone' => '',
                'date' => 'required|date',
                'time' => 'required',
                'category_id' => 'required',
                'source_id' => 'required',
                'remarks' => ''
            ]
        );
        $enquiry = Enquiry::findorfail($id);
        $enquiry->fill($data);
        $success = $enquiry->save();
        if ($success) {
            return redirect()->route('Enquiry.index')->with('success', 'New enquiry enquiry updated');
        } else {
            return redirect()->route('Enquiry.index')->with('error', 'Sorry! there is an error updating  enquiry enquiry');
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
        $enquiry = Enquiry::findorfail($id);
        $success = $enquiry->delete();
        if ($success) {
            return redirect()->route('Enquiry.index')->with('success', 'Enquiry enquiry Deleted successfully');
        } else {
            return redirect()->route('Enquiry.index')->with('error', 'Sorry! there is an error deleting  enquiry enquiry');
        }
    }

    public function ViewTrash()
    {
        $enquiry = Enquiry::onlyTrashed()->get();
        return view('admin.enquiry.index', compact('enquiry'))->with('trashed', 'true');
    }

    public function restore($id)
    {
        $enquiry = Enquiry::onlyTrashed()->where('id', $id)->first();
        $enquiry->restore();
        return redirect()->route('Enquiry.index')->with('success', 'Restored successfully');
    }

    public function deleteTrash($id)
    {
        $enquiry = Enquiry::onlyTrashed()->where('id', $id)->first();
        $enquiry->forcedelete();
        return back()->with('warning', 'Enquiry has been deleted from trashed');
    }
}