<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function users(){
        return view('Admin.user.view');
    }
    public function addUser(){
        return view('Admin.user.add');
    }
}
