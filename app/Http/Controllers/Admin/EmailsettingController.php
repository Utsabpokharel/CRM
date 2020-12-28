<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailsettingController extends Controller
{
    //


    public function settingform()
    {
    	
    	return view('admin.setting.emailsetting.form');
    }
}
