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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/histories', function () {
    return view('histories');
});
Route::get('/articles', function () {
    return view('articles');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/signin', function () {
    return view('signin');
});

Route::post('/contact/submit', 'MsgsController@submit');
