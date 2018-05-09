<?php

namespace App\Http\Controllers;


use App\Category;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    //
    public function index()
    {

        $cats = Category::where('parent_id', 0)->get();
        echo $cats->count();
        //echo $count;


        foreach ($cats as $cat) {
            echo $cat->name . '<br>';
            break;

//          if($cat->sub_cat->count()){
//              foreach ($cat->sub_cat as $sub){
//                  echo $sub . '<br>';
//                  if($sub->sub_cat->count()) {
//                      foreach ($sub->sub_cat as $sub1) {
//                          echo $sub1 . '<br>';
//                      }
//                  }
//              }
//          }
        }

    }
}
