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

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/fleets', 'FleetsController@index');

Route::get('/dashboard', 'PagesController@dashboard');

Auth::routes();

Route::resource('users','UserController');
Route::resource('fleets','FleetsController');