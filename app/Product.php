<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $fillable = ['name', 'category_id', 'code', 'price', 'availability', 'brand', 'description', 'is_new', 'is_recommended', 'status'];





}
