<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable=[
        'name',
        'link',
        'props',
        'props_values',
        'parent_id'
    ];

    public function sub_cat()
    {
        return $this->hasMany('App\Category','parent_id');
    }
}
