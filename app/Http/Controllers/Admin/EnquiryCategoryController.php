<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\EnquiryCategory;

class EnquiryCategoryController extends Controller
{

    public function index()
    {
        $category = EnquiryCategory::all();
//        dd($category);
        return view('admin.enquiry.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.enquiry.category.add');
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
        $category = new EnquiryCategory();
        $category->fill($data);
        $success = $category->save();
        if ($success) {
            return redirect()->route('EnquiryCategory.index')->with('success', 'New enquiry category added');
        } else {
            return redirect()->route('EnquiryCategory.index')->with('error', 'Sorry! there is an error adding  enquiry category');
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
        $category = EnquiryCategory::findorfail($id);
        return view('admin.enquiry.category.edit',compact('category'));
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
        $category = EnquiryCategory::findorfail($id);
        $category->fill($data);
        $success = $category->save();
        if ($success) {
            return redirect()->route('EnquiryCategory.index')->with('success', 'New enquiry category updated');
        } else {
            return redirect()->route('EnquiryCategory.index')->with('error', 'Sorry! there is an error updating  enquiry category');
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
        $category = EnquiryCategory::findorfail($id);
        $success = $category->delete();
        if ($success) {
            return redirect()->route('EnquiryCategory.index')->with('success', 'Enquiry category Deleted successfully');
        } else {
            return redirect()->route('EnquiryCategory.index')->with('error', 'Sorry! there is an error deleting  enquiry category');
        }
    }

    public function ViewTrash()
    {
        $category = EnquiryCategory::onlyTrashed()->get();
        return view('admin.enquiry.category.index', compact('category'))->with('trashed', 'true');
    }

    public function restore($id)
    {
        $category = EnquiryCategory::onlyTrashed()->where('id', $id)->first();
        $category->restore();
        return redirect()->route('EnquiryCategory.index')->with('success', 'Restored seccessfully');

    }

    public function deleteTrash($id)
    {
        $category = EnquiryCategory::onlyTrashed()->where('id', $id)->first();
        $category->forcedelete();
        return back()->with('warning', 'EnquiryCategory has been deleted from trashed');
    }
}
