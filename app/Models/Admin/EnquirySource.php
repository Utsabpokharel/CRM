<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class EnquirySource extends Model
{
    use softdeletes;
    use HasFactory;
    protected $fillable=['name','description'];

    public function enquiry()
    {
        return $this->hasMany('App\Models\Admin\enquiry');
    }
}
