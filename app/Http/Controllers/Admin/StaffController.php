<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Staff;
use App\Http\Requests\staffValidator;
use App\Models\Admin\Department;
use App\Models\Admin\title;
use App\Models\Admin\level;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::all();
        return view('admin.staff.view', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = level::all();
        $titles = title::all();
        $departments = Department::all();
        $district = $this->district();
        $city = $this->city();
        return view('admin.staff.add', compact('levels', 'titles', 'departments', 'district', 'city'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['title_id'] = $data['title_id'][0];
        // $password = Hash::make($request->password);
        // $data['password'] = $password;
        if ($request->hasFile('pp_photo')) {
            $staff_image_path = 'images/staff/';
            $data['pp_photo'] = save_image($request->pp_photo, 150, 150, $staff_image_path);
        }

        if ($request->hasFile('ctzn_front')) {
            $staff_image_path = 'images/staff/';
            $data['ctzn_front'] = save_image($request->ctzn_front, 150, 150, $staff_image_path);
        }

        if ($request->hasFile('ctzn_back')) {
            $staff_image_path = 'images/staff/';
            $data['ctzn_back'] = save_image($request->ctzn_back, 150, 150, $staff_image_path);
        }

        if ($request->hasFile('resume')) {
            $staff_image_path = 'images/staff/';
            $data['resume'] = save_image($request->resume, 150, 150, $staff_image_path);
        }

        if ($request->hasFile('offer_letter')) {
            $staff_image_path = 'images/staff/';
            $data['offer_letter'] = save_image($request->offer_letter, 150, 150, $staff_image_path);
        }

        if ($request->hasFile('joining_letter')) {
            $staff_image_path = 'images/staff/';
            $data['joining_letter'] = save_image($request->joining_letter, 150, 150, $staff_image_path);
        }

        if ($request->hasFile('contract_agreement')) {
            $staff_image_path = 'images/staff/';
            $data['contract_agreement'] = save_image($request->contract_agreement, 150, 150, $staff_image_path);
        }

        $staff = Staff::create($data);
        $staff->title()->sync($request->title_id);
        return redirect()->route('staff.view')->with('success', 'Staff Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = Staff::findOrfail($id);
        $levels = level::all();
        $titles = title::all();
        $departments = Department::all();
        $district = $this->district();
        $city = $this->city();
        return view("admin.staff.edit", compact('staff', 'levels', 'titles', 'departments', 'district', 'city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $staff = Staff::find($id);

        $data = $request->except('_token', 'confirm_password', 'pp_photo', 'ctzn_front', 'ctzn_back', 'resume', 'offer_letter', 'joining_letter', 'contract_agreement');
        $data['title_id'] = $data['title_id'][0];
        if ($request->hasFile('pp_photo')) {
            $data['pp_photo'] = save_image($request->pp_photo, 150, 150, $this->imagePath());
            delete_image($staff->pp_photo, $this->imagePath());
        } else {
            $data['pp_photo'] = $request->current_image;
        }

        if ($request->hasFile('ctzn_front')) {
            $data['ctzn_front'] = save_image($request->ctzn_front, 150, 150, $this->imagePath());
            delete_image($staff->ctzn_front, $this->imagePath());
        } else {
            $data['ctzn_front'] = $request->current_image;
        }

        if ($request->hasFile('ctzn_back')) {
            $data['ctzn_back'] = save_image($request->ctzn_back, 150, 150, $this->imagePath());
            delete_image($staff->ctzn_back, $this->imagePath());
        } else {
            $data['ctzn_back'] = $request->current_image;
        }

        if ($request->hasFile('resume')) {
            $data['resume'] = save_image($request->resume, 150, 150, $this->imagePath());
            delete_image($staff->resume, $this->imagePath());
        } else {
            $data['resume'] = $request->current_image;
        }

        if ($request->hasFile('offer_letter')) {
            $data['offer_letter'] = save_image($request->offer_letter, 150, 150, $this->imagePath());
            delete_image($staff->offer_letter, $this->imagePath());
        } else {
            $data['offer_letter'] = $request->current_image;
        }

        if ($request->hasFile('joining_letter')) {
            $data['joining_letter'] = save_image($request->joining_letter, 150, 150, $this->imagePath());
            delete_image($staff->joining_letter, $this->imagePath());
        } else {
            $data['joining_letter'] = $request->current_image;
        }

        if ($request->hasFile('contract_agreement')) {
            $data['contract_agreement'] = save_image($request->contract_agreement, 150, 150, $this->imagePath());
            delete_image($staff->contract_agreement, $this->imagePath());
        } else {
            $data['contract_agreement'] = $request->current_image;
        }

        $staff = Staff::where("id", $id)->update($data);
        // $staff->title()->sync($request->title_id);

        return redirect()->route('staff.view')->with('success', 'Staff Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Staff::findOrfail($id);
        $data->delete();
        return redirect()->route('staff.view')->with("success", 'Delete Successfully');
    }

    public function trashedView()
    {
        $staff = Staff::onlyTrashed()->latest()->get();
        return view('admin.staff.view', compact('staff'))->with('trashed', 'true');
    }
    public function restore($id)
    {
        $staff = Staff::onlyTrashed()->where('id', $id)->first();
        $staff->restore();
        return redirect()->route('staff.view')->with('success', 'Staff restore successfully');
    }

    public function deleteTrash($id)
    {
        $staff = Staff::onlyTrashed()->where('id', $id)->first();
        $staff->forceDelete();
        return redirect()->route('staff.view')->with('warning', 'Permanent Delete Successfully');
    }
    protected function imagePath()
    {
        return "images/staff/";
    }
    protected function district()
    {
        return DB::table('districts')->get();
    }

    protected function city()
    {
        return DB::table('cities')->get();
    }
}
