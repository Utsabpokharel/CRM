<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Customer;

class CustomerController extends Controller
{
    public function index()
    {
    	
    	return view('admin.customer.index');
    }
    public function create()
    {
    	return view('admin.customer.add');
    }
}
