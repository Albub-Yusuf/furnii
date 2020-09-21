<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
  protected $fillable = [

      'background_image',
      'title',
      'foreground_image',
      'porduct_link',
      'product_link',
      'status',
      'created_by',
      'updated_by'

  ];
}
