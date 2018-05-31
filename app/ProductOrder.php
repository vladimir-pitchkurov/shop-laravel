<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $fillable = ['user_name', 'user_phone', 'user_comment', 'user_id', 'date', 'products', 'status'];



}
