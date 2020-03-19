<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $fillable = [

        'name',
        'banner_image',
        'status',
        'created_by',
        'updated_by'
    ];
}
