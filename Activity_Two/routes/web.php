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
    return view('index');
});

Route::get('/login', function () { return view('login'); });
Route::post('/dologin','LoginController@index');

Route::get('/dologin3','Login3Controller@showLogin3')->name('login3');
Route::post('/dologin3','Login3Controller@index')->name('login3.login');

Route::get('/loginSuccess', function () { return view('loginSuccess'); })->name('login.success');

Route::get('/loginFailure', function () { return view('loginFailure'); })->name('login.failure');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('tag', 'TagsController');

Route::resource('/userrest', 'UserRestController'); 