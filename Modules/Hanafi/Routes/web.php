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

Route::prefix('hanafi');
 
    Route::get('/', 'HanafiController@index');
    Route::resource('/post','PostsController');
    route::get('/test','AdminController@mutaz0')->middleware('auth');
    route::get('/test1','AdminController@mutaz1');


