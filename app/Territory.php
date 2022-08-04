<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Territory extends Model
{
    protected $fillable=[
        'zone_code','region_code','territory_name'
    ];
}
