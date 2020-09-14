<?php

use Illuminate\Support\Facades\Auth;
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
    return view('users.index');
});


Route::get('/fixe','\App\Http\Controllers\NewController@fixepage')->name('layouts');

Route::get('/login','\App\Http\Controllers\LoginController@loginView');
Route::post('/giris','\App\Http\Controllers\LoginController@login');
Route::get('/create','\App\Http\Controllers\NewController@createcompte');
Route::post('/success','\App\Http\Controllers\NewController@create');
Route::get('list','\App\Http\Controllers\NewController@liste');
Route::get('/guncelle/{id}','\App\Http\Controllers\NewController@updateView')->where(array('id'=>'[0-9]+'));
Route::post('/guncelledi/{id}','\App\Http\Controllers\NewController@update');
Route::get('sil/{id}','\App\Http\Controllers\NewController@delete')->where(array('id'=>'[0-9]+'));
Route::get('/admin','\App\Http\Controllers\NewController@admin');
Route::get('/buy','\App\Http\Controllers\BuyController@buyView');
Route::post('/buydone','\App\Http\Controllers\BuyController@buy');
Route::get('/adminlist','\App\Http\Controllers\NewController@adminlist');
Route::get('/adminadd','\App\Http\Controllers\NewController@adminadd');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
