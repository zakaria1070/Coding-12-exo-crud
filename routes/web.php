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

// chemin edit
Route::get('/about/{id}/edit','AboutController@edit');

// chemin uptdate
Route::post('/about/{id}/update','AboutController@update');

// chemin delete
Route::get('/about/{id}/destroy','AboutController@destroy');

// chemin create 

Route::get('/about/create','AboutController@create');

// chemin store
Route::post('/about/store','AboutController@store');