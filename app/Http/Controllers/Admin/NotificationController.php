<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Illuminate\Notifications\Notification;
use App\Models\Admin\Notification;
use Auth;

class NotificationController extends Controller
{
    public function notification(){
        $id=Auth::user()->id;
        return Notification::where('notifiable_id',$id)->where('read_at',null)->latest()->paginate();
    }
}
