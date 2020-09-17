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


Route::get('/fixe','NewController@fixepage')->name('layouts');

Route::get('/login','LoginController@loginView');
Route::post('/giris','LoginController@login');
Route::post('/success','NewController@create');
Route::get('list','NewController@liste');
Route::get('/guncelle/{id}','NewController@updateView')->where(array('id'=>'[0-9]+'));
Route::post('/guncelledi/{id}','NewController@update');
Route::get('sil/{id}','NewController@delete')->where(array('id'=>'[0-9]+'));
Route::get('/admin','NewController@admin');
Route::get('/buy','BuyController@buyView');
Route::post('/buydone','BuyController@buy');
Route::get('/adminlist','NewController@adminlist');
Route::get('/adminadd','NewController@adminadd');

Route::get('/profile','ProfileController@profilView');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
