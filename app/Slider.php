<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
    protected $fillable=[
        'path',
        'description',
        'slider_id'
    ];
}