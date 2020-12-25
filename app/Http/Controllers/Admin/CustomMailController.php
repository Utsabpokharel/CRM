<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CustomMail;
use Illuminate\Http\Request;

class CustomMailController extends Controller
{
    public function create()
    {
        $data = CustomMail::all();
        return view('admin.mail.form');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        CustomMail::create($data);
        return redirect()->route('vendors.view')->with('success', 'Mail has been sent successfully');
    }
}
