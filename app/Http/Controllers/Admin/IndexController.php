<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Customer;
use App\Models\Admin\staff;
use App\Models\Admin\user;
use App\Models\Vendor;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $user = user::count();
        $staff = staff::count();
        $customer = Customer::count();
        $vendor = Vendor::count();
    	return view('admin.index',compact('staff','customer','vendor','user'));
    }

    public function test()
    {
    	return redirect()->route('admin.test');
    }
}
