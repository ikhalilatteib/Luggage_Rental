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



Route::get('/fixe','NewController@fixepage')->name('layouts');


Route::get('/guncelle/{id}','NewController@updateView')->where(array('id'=>'[0-9]+'));
Route::post('/guncelledi/{id}','NewController@update');
Route::get('sil/{id}','NewController@delete')->where(array('id'=>'[0-9]+'));
Route::get('/buy','BuyController@buyView')->name('sale');
Route::post('/buydone','BuyController@buy')->name('sale.done');
Route::get('/waiting','BuyController@Waiting')->name('waiting');
Route::post('/approve/{id}','BuyController@adminUpdate')->name('approve')->where(array('id'=>'[0-9]+'));
Route::get('/detail/{id}','BuyController@details')->where(array('id'=>'[0-9]+'))->name('details');


Route::get('/profile/{id}','ProfileController@profilView')->where(array('id'=>'[0-9]+'))->name('profile');


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

                    /* Admin Surface */
Route::middleware('auth')->group(function (){
    Route::get('/cree','AdminController@CreateView')->name('create');
    Route::post('/created','AdminController@create')->name('created');
    Route::get('/admin','AdminController@admin')->name('admin');
    Route::get('/adminlist','AdminController@adminlist')->name('users.list');
    Route::get('/adminadd','AdminController@adminadd')->name('add.users');
    Route::get('/now','AdminController@now')->name('now');
    Route::get('/saleapp','AdminController@approveSales')->name('approve.sales');
    Route::get('/saleunap','AdminController@Unapprove')->name('unapprove');
});

Route::get('/mail','NewController@mail');
