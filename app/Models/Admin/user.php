<?php

namespace App\Models\Admin;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class user extends  Authenticatable
{
    use HasFactory, Notifiable;
    protected $guarded = [];

    public function enquiry(){
        return $this->hasMany('App\Models\Admin\EnquiryResponse');
    }
    public function bank(){
        return $this->hasMany('App\Models\Admin\Bank');
    }
    
    public function role(){
        return $this->belongsTo('App\Models\Admin\role','roleid');
    }
}

