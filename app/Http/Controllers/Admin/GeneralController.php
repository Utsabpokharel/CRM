<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\General;
use Illuminate\Support\Facades\Auth;
use Validate;

class GeneralController extends Controller
{
    public function create()
    {
        $general = General::where('user_id','=',Auth::user()->id)->first();
        return view('admin.generalsetting.add',compact('general'));
    }
     public function store(Request $request)
    {
        $request->validate([
            'website_name' => 'required|min:3|max:20',
            'website' => 'required|min:3|max:50',
            'email' => 'required',
            'website_logo' => 'required|Image',
        ],[
            'website_name.required'=>'Website Name is required',
            'website_name.min'=>'The Website Name must be at least 3 characters.',
            'website_name.max'=>'The Website Name Name may not be greater than 20 characters.',
            'email.required'=>'Email is required'
        ]);
        $data = $request->all();

        $data['website_logo'] = save_image($request->website_logo, 150, 150, $this->imagePath());


        General::create($data);
        return redirect()->route('general.create')->with('success','Settings Created Successfully!!!');
    }
    protected function imagePath()
    {
        return "images/general/";
    }

    public function edit($id)
    {
        $general = General::findOrfail($id);
        return view('admin.generalsetting.add',compact('general'));
    }

    public function update(Request $request, $id)
    {
        $general = General::findorfail($id);
        $data = $request->except('_token','website_logo');
        if ($request->hasFile('website_logo')) {
            $data['website_logo'] = save_image($request->website_logo, 150, 150, $this->imagePath());
            delete_image($general->website_logo, $this->imagePath());
        } else
            $data['website_logo'] = $request->website_logo;

        General::where('id', $id)->update($data);
        return redirect()->back()->with('success','General Settings Updated successfully');

    }

}
