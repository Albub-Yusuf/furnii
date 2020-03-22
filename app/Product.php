<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [

        'category_id',
        'name',
        'description',
        'short_description',
        'status',
        'is_featured',
        'is_new',
        'featured_image',
        'created_by',
        'updated_by'

    ];

    public function category(){

        return $this->belongsTo(Category::class);
    }
}
