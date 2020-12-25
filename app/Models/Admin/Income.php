<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Income extends Model
{
    use HasFactory;
    use softDeletes;
    protected $guarded=[];

    public function category(){
        return $this->belongsTo('App\Models\Admin\incomecategory','category_id');
    }

}
