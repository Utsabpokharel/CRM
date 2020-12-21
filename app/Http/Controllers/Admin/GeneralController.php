<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\General;
use Validate;

class GeneralController extends Controller
{
     public function create()
    {
        return view('admin.generalsetting.add');
    }
     public function store(Request $request)
    {
        // $request->validate([
        //     'website_name' => 'required|min:3|max:20|alpha',
        //     'website' => 'required|min:3|max:20|alpha',
        //     'email' => 'required'

        // ],[
        //     'website_name.required'=>'Website Name is required',
        //     'website_name.min'=>'The Website Name must be at least 3 characters.',
        //     'website_name.max'=>'The Website Name Name may not be greater than 20 characters.',

        //     'email.required'=>'Email is required'


        //      ]);
        $data = $request->all();

        $data['website_logo'] = save_image($request->website_logo, 150, 150, $this->imagePath());


        General::create($data);
        return redirect()->route('general.create');
    }
protected function imagePath()
    {
        return "images/general/";
    }

}
