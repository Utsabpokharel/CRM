<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\user;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    public function edit($id)
    {
        $user = user::findOrFail($id);
        $district = $this->district();
        $city = $this->city();
        return view('admin.Profile-demo.personal', compact('user', 'district', 'city'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $user = user::find($id);
        $user->update($data);
        return redirect()->route('admin.Profile-demo.personal')->with('success', 'User updated sucessfully');
    }

    protected function district()
    {
        return DB::table('districts')->get();
    }

    protected function city()
    {
        return DB::table('cities')->get();
    }
}
