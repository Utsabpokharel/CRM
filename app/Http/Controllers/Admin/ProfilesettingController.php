<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\user;
use Illuminate\Http\Request;

class ProfilesettingController extends Controller
{
    public function settingform()
    {
    	return view('admin.setting.profilesetting.form');
    }

    public function editPassword($id){
        $user = user::findOrfail($id);
        return view('admin.setting.profilesetting.form',compact('user'));
    }

    public function updatePassword(Request $request,$id){
        $data = $request->all();
        $user = user::find($id);
        $user->update($data);
        return redirect()->route('admin.index',compact('user'))->with('success', 'You Password has been changed');
    }
}
