<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = [];

    public function staff()
    {
        return $this->hasOne('App\Models\Admin\Staff');
    }
}
