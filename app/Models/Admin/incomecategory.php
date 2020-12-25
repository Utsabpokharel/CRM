<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class incomecategory extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function income()
    {
        return $this->hasMany('App\Models\Admin\Income');
    }
}
