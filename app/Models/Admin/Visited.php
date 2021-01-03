<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visited extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    public function staff()
    {

        return $this->belongsTo('App\Models\Admin\Visited', 'handled_by');
    }
}
