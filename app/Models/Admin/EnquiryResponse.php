<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;
use App\Models\Admin\Enquiry;

class EnquiryResponse extends Model
{
    use softdeletes;
    use HasFactory;

    protected $fillable=['enquiry_by','responded_by','responded_through','message','remarks'];

    public function response(){
        return $this->belongsTo(Enquiry::class,'enquiry_by');
    }

    public function user(){
        return $this->belongsTo('App\Models\Admin\user','responded_by');
    }
}
