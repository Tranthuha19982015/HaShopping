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

Route::get('/login', [
    'as' => 'login',
    'uses' => 'AdminController@loginAdmin'
]);
Route::post('/login', [
    'as' => 'login',
    'uses' => 'AdminController@postloginAdmin'
]);

Route::get('/logout', [
    'as' => 'logout',
    'uses' => 'AdminController@logoutAdmin'
]);

Route::get('/home', function () {
    return view('home');
});


