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

Route::get('/', 'HomeController@index');


Route::get('/{name}', function ($name = 'chinthu') {
    return $name;
    //return view('welcome');
});

Route::get('/test',function(){
   return 'testing'; 
});

Route::get('user/{id}', 'UserController@show');


Route::resource('images', 'ImageController');
