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

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/tourpacket', 'TourPacket\ViewController@index');
Route::get('/tourpacket/new', 'TourPacket\ViewController@create');
Route::post('/tourpacket/create', 'TourPacket\PostController@create');