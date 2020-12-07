<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;

class LoginController extends Controller
{
    public function form(){
       return view('admin.login');
    }

    public function login(Request $request){
        $cretential = $request->only('email', 'password');
        if (AUTH::guard('user')->attempt($cretential)) {
            return redirect()->route();
        } else {
            return redirect()->back()->withErrors('email or password do not match');
        }
    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }
}
