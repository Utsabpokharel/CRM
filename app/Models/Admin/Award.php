<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function staff(){
        return $this->belongsTo('App\Models\Admin\Staff','staff');
    }
}
