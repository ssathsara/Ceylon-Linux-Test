<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'sku_code','sku_name','mrp','distributor_price','amount','type'
    ];
}
