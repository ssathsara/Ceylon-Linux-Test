<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchasedOrder extends Model
{
    protected $fillable=[
    'zone','region','territory','distributor','date','remark','sku_code','qty','total_price'
    ];
}
