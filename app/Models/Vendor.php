<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
    use SoftDeletes;
    // protected $table = 'vendors';
    protected $fillable = ['fname', 'lname', 'gender', 'dateofbirth', 'registrationnumber', 'panvatnumber', 'image', 'email', 'phone', 'mobile', 'city', 'district', 'address1', 'address2', 'vendor_type', 'firstcontactperson', 'firstemail', 'firstphone', 'firstemail', 'secondcontactperson', 'secondemail', 'secondphone', 'ifuser', 'frontcitizenshipimage', 'backcitizenshipimage', 'resume', 'offer_letter', 'joining_letter', 'contract_agreement', 'permanent_address', 'temporary_address'];
    use HasFactory;
}