<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomMail extends Model
{
    use HasFactory;
    protected $fillable = ['receiver', 'sender', 'message'];
}
