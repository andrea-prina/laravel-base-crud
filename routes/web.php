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

Route::get('/', 'HomeController@index')->name('admin.home');

Route::resource('comics', 'ComicController');
// NOTE: The resource route creates a route for all the methods (index, show, ...) of a --resource controller
// Route::get('/comics', 'ComicController@index')->name('comics.index');
// Route::get('/comics/{comic}', 'ComicController@show')->name('comics.details');
