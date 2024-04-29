<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{user_id}', 'Hello@hello');

Route::get('/single', 'SingleActionController');

Route::get('/my', 'MyController@index');

Route::get('/my/detail', 'MyController@detail');

Route::get('/my/get-param/{value?}', 'MyController@get_param');