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

/* User Action*/
Route::group(['middleware' => ['auth']], function () {
    Route::get('/guncelle/{id}', 'NewController@updateView')->where(array('id' => '[0-9]+'));
    Route::post('/guncelledi/{id}', 'NewController@update');
    Route::get('sil/{id}', 'NewController@delete')->where(array('id' => '[0-9]+'));
    Route::get('/buy', 'BuyController@buyView')->name('sale');
    Route::post('/buydone', 'BuyController@buy')->name('sale.done');
    Route::get('/detail/{id}', 'BuyController@details')->where(array('id' => '[0-9]+'))->name('details');
    Route::get('/updatebuyview/{id}', 'BuyController@updatebuyView')->where(array('id' => '[0-9]+'))->name('updatebuy.view');
    Route::post('/updatebuy/{id}', 'BuyController@updateBuy')->where(array('id' => '[0-9]+'))->name('update.buy');
    Route::get('/deletebuy/{id}', 'BuyController@deleteBuy')->where(array('id' => '[0-9]+'))->name('delete.buy');
    Route::get('/profile/{id}', 'ProfileController@profilView')->where(array('id' => '[0-9]+'))->name('profile');
    Route::get('/mysale/{id}', 'ProfileController@mysale')->name('mysale')->where(array('id' => '[0-9]+'));
});
/*End Profile Action*/


Auth::routes();



/* home*/
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');
/* End Home*/


/* Admin Surface */
Route::group(['middleware' => ['role:superadministrator']], function () {
    Route::get('/dashbord', 'AdminController@Dashbord')->name('dashboard');
    Route::get('/cree', 'AdminController@CreateView')->name('create');
    Route::post('/created', 'AdminController@create')->name('created');
    Route::get('/adminlist', 'AdminController@adminlist')->name('users.list');
    Route::get('/adminadd', 'AdminController@adminadd')->name('add.users');
    Route::get('/now', 'AdminController@now')->name('now');
    Route::get('/waiting', 'BuyController@Waiting')->name('waiting');
    Route::get('/saleapp', 'AdminController@approveSales')->name('approve.sales');
    Route::get('/saleunap', 'AdminController@Unapprove')->name('unapprove');
    Route::get('/saledel', 'AdminController@DeleteSale')->name('deleted.sale');
    Route::get('/deleteduser', 'AdminController@deletedAcount')->name('deleted.user');
    Route::get('/contact', 'ContactController@contactView')->name('contact');
    Route::post('/approve/{id}', 'BuyController@adminUpdate')->name('approve')->where(array('id' => '[0-9]+'));
    Route::get('/fixe', 'NewController@fixepage')->name('layouts');
    Route::get('/adminlayouts', 'NewController@adminlayouts')->name('admin.layouts');
    Route::get('/mail', 'NewController@mail');


});
/* End Admin Surface */
Route::post('/contactus', 'NewController@contactUs')->name('contact.us');


