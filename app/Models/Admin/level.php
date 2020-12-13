<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    use HasFactory;
    protected $fillable=['level','description'];

    public function staff()
    {
        return $this->hasMany('App\Models\Admin\Staff');
    }
}
