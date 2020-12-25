<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Expenses;


class Expensescategory extends Model
{
    use HasFactory;
    protected $guarded=
    [
    ];
    public function expenses()
    {
    	return $this->hasMany(Expenses::class,'category_id');
    }
}
