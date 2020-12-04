<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\user;
use Hash;

class userController extends Controller
{
    public function users(){
        $user = user::all();
        return view('Admin.user.view',compact('user'));
    }
    public function addUser(){
        return view('Admin.user.add');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'password'=>'required',
            'confirm_password'=>'required|same:password',
            'gender'=>'required',
            'address'=>'required',
            'roleid'=>'required'
        ]);

        $data=$request->except('confirm_password');
        $password = Hash::make($request->password);
        $data['password'] = $password;
        $imagepath='images/users/';
        $data['image']=save_image($request->image,150,150,$imagepath);
        user::create($data);
        return redirect()->route('user.view')->with('success','User added sucessfully');
    }
    public function destroy($id){
        $user=user::find($id);
        $user->delete();
        return back()->with('flash_error','Deleted Successfully')->with('warning','Deleted Successfully');
    }
    public function editUser($id){
        $user=user::findorfail($id);
        return view('Admin.user.edit',compact('user'));
    }
    public function updateUser(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'password'=>'required',
            'confirm_password'=>'required|same:password',
            'gender'=>'required',
            'address'=>'required',
            'roleid'=>'required'
        ]);

        $data=$request->except('confirm_password');
        $password = Hash::make($request->password);
        $data['password'] = $password;
        $user = user::find($id);
        $user->update($data);
        return redirect()->route('user.view')->with('success','User updated sucessfully');
    }
}
