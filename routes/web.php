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

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    return "Cache is Config";
});

Route::get('/key-generate', function() {
    Artisan::call('key:generate');
    return "key is generated";
});


Route::get('/', function () {
   // return view('welcome');
    return redirect()->route('context.index');
});

Route::get('/', function () {
       // return view('welcome');
       return redirect()->route('notification.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'], function(){
        //Notifications
        Route::get('notifications', 'NotifactionController@index')->name('notification.index');
});