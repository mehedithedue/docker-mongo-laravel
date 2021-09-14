<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\Model;

class Product extends Model
{
    protected $collection = 'products';

    protected $guarded = [];
    protected $dates = ['created_at'];
}
