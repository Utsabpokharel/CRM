<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilesettingController extends Controller
{
    public function settingform()
    {
    	return view('admin.setting.profilesetting.form');
    }
}
