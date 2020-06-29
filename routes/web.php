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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/client', function () {
    return view('client.pages.index');
});

Route::get('/admin', function () {
    return view('admin.pages.index');
});

Route::group(['prefix' => 'admin'], function () {
    Route::resource('category', 'CategoryController');
});
