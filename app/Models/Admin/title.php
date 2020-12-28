<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class title extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description'];

    public function staff(){
        return $this->belongsToMany('App\Models\Admin\staff','staff_titles');
    }

  /*  public function staff()
    {
        return $this->hasMany('App\Models\Admin\Staff');
    }*/
    public function user()
    {
        return $this->hasMany('App\Models\Admin\user');
    }
}
