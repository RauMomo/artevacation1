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
    return view('home');
});
Route::get('home', function () {
    return view('home');
});
Route::get('about', function () {
    return view('about');
});
Route::get('article/1', function () {
    return view('article');
});
Route::redirect('/1', '/article/1');
Route::redirect('/2', '/article/2');
Route::redirect('/3', '/article/3');
Route::get('article/2', function () {
    return view('article2');
});
Route::get('article/3', function () {
    return view('article3');
});
Route::get('login', function () {
    return view('login');
})->name('login');
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/partner', function () {
    return view('partner');
})->middleware('auth');

Route::get('/blog', function(){
    return view('blog');
});
Route::post('/partner', 'PartnersController@store');
Route::post('/user/checkLogin', 'UserController@checkLogin');
Route::get('/user/successLogin', 'UserController@successLogin');
Route::post('/user/register', 'UserController@register');
Route::get('/user/logout', 'UserController@logout');
Route::get('/search', 'SearchController@search');

