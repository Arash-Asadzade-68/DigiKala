<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
//    protected $directory = '/images/category/';
    protected $fillable=[
        'name',
        'link',
        'props',
        'props_values',
        'parent_id',
        'path'
    ];

    public function sub_cat()
    {
        return $this->hasMany('App\Category','parent_id');
    }

//    public function getPathAttribute($image)
//    {
//        return $this->directory . $image;
//    }
}
