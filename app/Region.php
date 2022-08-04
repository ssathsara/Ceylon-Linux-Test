<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

class Region extends Model
{
    // use HasFactory;

    protected $fillable=[
        'zone_code','region_name'
    ];
    
}