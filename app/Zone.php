<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

class Zone extends Model
{
    // use HasFactory;

    protected $fillable=[
        'long_desc','short_desc'
    ];
    
}
