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

    public function enquiry()
    {
        return $this->hasMany('App\Models\Admin\EnquiryResponse');
    }
    public function bank()
    {
        return $this->hasMany('App\Models\Admin\Bank');
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Admin\role', 'roleid');
    }

    public function department()
    {
        return $this->belongsTo('App\Models\Admin\Department','department');
    }

    public function staff()
    {

        return $this->hasMany('App\Models\Admin\staff');
    }

    public function customer()
    {
        return $this->hasMany('App\Models\Admin\Customer');
    }

    public function vendor()
    {
        return $this->hasMany('App\Models\Vendor');
    }

    public function general(){
        return $this->hasOne('App\Models\Admin\General');
    }
}
