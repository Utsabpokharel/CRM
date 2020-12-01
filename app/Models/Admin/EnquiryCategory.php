<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnquiryCategory extends Model
{
    use HasFactory;

    protected $fillable=['name','description'];
}
