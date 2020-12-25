<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class staff extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];

    public function title(){
        return $this->belongsToMany('App\Models\Admin\title','staff_titles');
    }

    public function level(){
        return $this->belongsTo('App\Models\Admin\level','level_id');
    }

    public function department(){
        return $this->belongsTo('App\Models\Admin\Department','department_id');
    }

    public function award()
    {
        return $this->hasMany('App\Models\Admin\Award');
    }

}
