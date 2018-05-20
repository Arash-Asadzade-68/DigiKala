<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/',function (){

    return view('home');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){
    Route::get('/',function (){
        return view('layouts.admin');
    });
    Route::resource('users','UsersController');
    Route::resource('categories','CategoryController');
    Route::get('categories/properties/{category}','CategoryController@properties')->name('categories.properties');
    Route::post('categories/delete','CategoryController@categoriesDelete')->name('categories.delete');
});