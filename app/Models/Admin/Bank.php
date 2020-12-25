<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Bank extends Model
{
    use HasFactory;
    use softdeletes;

    protected $guarded=[
   ];

   public function user()
   {
   	return $this->belongsTo('App\Models\Admin\user','user_id');
   }

}
