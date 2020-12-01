<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
    use SoftDeletes;
    protected $table = 'vendors';
    protected $filable = ['fname', 'lname', 'gender', 'dateofbirth', 'registrationnumber', 'panvatnumber', 'password', 'image', 'phone', 'mobile', 'city', 'address1', 'address2', 'vendor_type', 'firstcontactperson', 'firstemail', 'firstphone', 'firstemail', 'secondcontactperson', 'secondemail', 'secondphone', 'ifuser', 'ifproof'];
    use HasFactory;
}