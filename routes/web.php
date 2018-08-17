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
Route::get('sites/{urlOrganization}', 'FrontController')->name('sites');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', 'UserController');
Route::resource('themes', 'ThemeController');

Route::get('/saveTheme/{id}', 'HomeController@updateTheme');
Route::get('/generateTheme', 'HomeController@generateTheme');