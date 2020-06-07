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


Route::prefix('hanafi')->group(function() {
    Route::get('/', 'HanafiController@index');
    Route::resource('/post','PostsController');
  
});

Route::get('/admin', function(){
 return ' admin route';

});
route::get('test','AdminController@mutaz');