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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::prefix('jobs')->group(function(){
    Route::get('/', 'JobsController@index')->name('jobs.dashboard');
    Route::get('/addJob', 'JobsController@addJob')->name('jobs.addJob');
    Route::post('/addJob', 'JobsController@submitJob')->name('jobs.addJob.submit');
});

Route::prefix('skills')->group(function(){
    Route::get('/', 'SkillsController@index')->name('skills.dashboard');
    Route::get('/addSkill', 'SkillsController@addSkill')->name('skills.addSkill');
    Route::post('/addSkill', 'SkillsController@submitSkill')->name('skills.addSkill.submit');
});
    
Route::prefix('education')->group(function(){
    Route::get('/', 'EducationController@index')->name('education.dashboard');
    Route::get('/addEducation', 'EducationController@addEducation')->name('education.addEducation');
    Route::post('/addEducation', 'EducationController@submitEducation')->name('education.addEducation.submit');
});

