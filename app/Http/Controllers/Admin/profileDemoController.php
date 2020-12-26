<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\Bank;
use App\Models\Admin\Customer;
use App\Models\Admin\Department;
use App\Models\Admin\level;
use App\Models\Admin\staff;
use App\Models\Admin\title;
use App\Models\Vendor;
use Illuminate\Support\Facades\DB;

// use App\Models\Admin\user;

class profileDemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = title::find(1);
        $level = level::find(1);
        $department = Department::find(1);
        $user = Auth::user()->id;
        $user_email = Auth::user()->email;
        $staff = staff::where('email',$user_email)->first();
        $customer = Customer::where('email',$user_email)->first();
        $vendor = Vendor::where('email',$user_email)->first();
        // dd($department);
        $bank = Bank::where('user_id', $user)->first();
        // $bank = $bank->get('');
        // dd($bank->bank_name);
        return view('admin.Profile-demo.demo', compact('title', 'department', 'level', 'bank', 'user','staff','customer','vendor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
