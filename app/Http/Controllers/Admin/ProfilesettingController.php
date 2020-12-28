<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\user;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilesettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function settingform()
    {
    	return view('admin.setting.profilesetting.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        user::find(Auth::user()->id)->update(['password'=> Hash::make($request->new_password)]);

        return redirect()->route('logout')->with('success','Your Login Password has been changed');
    }
}
