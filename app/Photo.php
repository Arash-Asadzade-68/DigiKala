<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable = ['path'];
    protected $directory = '/images/profile/';

    public function getPathAttribute($photo)
    {
        return $this->directory . $photo;
    }
}
