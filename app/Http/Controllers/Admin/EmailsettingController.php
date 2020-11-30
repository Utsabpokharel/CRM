<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailsettingController extends Controller
{
    //


    public function settingform()
    {
    	/*https://codingdriver.com/dynamic-mail-configuration-in-laravel-with-values.html*/
    	return view('admin.setting.emailsetting.form');
    }
}
