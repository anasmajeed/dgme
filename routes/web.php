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
Route::get('/admin',function()
{
    return view('extra');
});
Route::get('/calender',function()
{
    return view('calender');
});
Route::get('/loginpage',function()
{
    return view('loginpage');
});
Route::get('/register',function()
{
    return view('register');
});

Route::get('/main',function()
{
    return view('main');
});

Route::get('/profile',function()
{
    return view('profile');
});