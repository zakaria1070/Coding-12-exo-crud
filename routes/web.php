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

// affiche la page 
Route::get('/', 'AllController@show');

// route admin
Route::get('/admin',function(){
    return view('layouts.admin');
});

// chemin back
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/service', 'ServiceController@index')->name('service');
Route::get('/subscribe', 'SubscribeController@index')->name('subscribe');

// chemin edit
Route::get('/about/{id}/edit','AboutController@edit');
Route::get('/service/{id}/edit','ServiceController@edit');
Route::get('/subscribe/{id}/edit','SubscribeController@edit');

// chemin uptdate
Route::post('/about/{id}/update','AboutController@update');
Route::post('/service/{id}/update','ServiceController@update');
Route::post('/subscribe/{id}/update','SubscribeController@update');

// chemin delete
Route::get('/about/{id}/destroy','AboutController@destroy');
Route::get('/service/{id}/destroy','ServiceController@destroy');
Route::get('/subscribe/{id}/destroy','SubscribeController@destroy');

// chemin create 

Route::get('/about/create','AboutController@create');
Route::get('/service/create','ServiceController@create');
Route::get('/subscribe/create','SubscribeController@create');

// chemin store
Route::post('/about/store','AboutController@store');
Route::post('/service/store','ServiceController@store');
Route::post('/subscribe/store','SubscribeController@store');