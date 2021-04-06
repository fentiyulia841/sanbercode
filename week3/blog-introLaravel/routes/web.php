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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');
Route::get('/register', 'IniController@index')->name('register');
Route::post('/register', 'IniController@variabel')->name('register.variabel');
Route::get('/welcome', 'IniController@welcome')->name('welcome');
