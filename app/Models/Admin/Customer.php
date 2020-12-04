<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;
class Customer extends Model
{
    use HasFactory;
    use softdeletes;
     protected $guarded=[
   ];

    public function enquiry()
    {
        return $this->hasMany('App\Models\Admin\enquiry');
    }
}
