<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;
use App\Models\Admin\EnquiryResponse;

class Enquiry extends Model
{
    use softdeletes;
    use HasFactory;
    protected $fillable=['is_customer','customer_id','name','email','phone','date','time','remarks','category_id','source_id'];

    public function category(){
        return $this->belongsTo('App\Models\Admin\EnquiryCategory','category_id');
    }

    public function source(){
        return $this->belongsTo('App\Models\Admin\EnquirySource','source_id');
    }

    public function customer(){
        return $this->belongsTo('App\Models\Admin\Customer','customer_id');
    }

    public function response(){
        return $this->hasMany(EnquiryResponse::class);

    }
}
