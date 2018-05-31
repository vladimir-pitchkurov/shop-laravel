<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['name', 'sort_order', 'status'];

}
