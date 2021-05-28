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

Route::get('/', 'JumbotronController@home')->name('home');

Route::get('/match/{id}', 'JumbotronController@match')->name('match');

Route::get('/edit/{id}', 'JumbotronController@edit')->name('edit');
Route::post('/update/{id}', 'JumbotronController@update')->name('update');

Route::get('/destroy/{id}', 'JumbotronController@destroy')->name('destroy');

Route::get('/newMatch', 'JumbotronController@newMatch') -> name('newMatch');
Route::post('/store', 'JumbotronController@store') -> name('store');
