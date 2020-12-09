<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class EnquiryCategory extends Model
{
    use softdeletes;
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function enquiry()
    {
        return $this->hasMany('App\Models\Admin\Enquiry');
    }
}
