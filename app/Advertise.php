<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advertise extends Model
{
    use SoftDeletes;
    protected $fillable = [

        'title',
        'short_details',
        'details',
        'image',
        'status',
        'created_by',
        'updated_by'
    ];
}
