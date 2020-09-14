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


Route::get('hello', function () {
    return 'Hello Laravel';
});

Route::get('/hello/id',function() {
    return 'Hello ID';
});

Route::get('/page/{id?}',function ($id='default'){
    return 'This is Page: ' . $id;
});

Route::get('/news/{id?}',function ($id=null) {
    return 'This is News: '. $id;
});