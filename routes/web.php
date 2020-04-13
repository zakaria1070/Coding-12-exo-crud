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
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/testimonial', 'TestimonialController@index')->name('testimonial');
Route::get('/team', 'TeamController@index')->name('team');

// chemin edit
Route::get('/about/{id}/edit','AboutController@edit');
Route::get('/service/{id}/edit','ServiceController@edit');
Route::get('/subscribe/{id}/edit','SubscribeController@edit');
Route::get('/portfolio/{id}/edit','PortfolioController@edit');
Route::get('/testimonial/{id}/edit','TestimonialController@edit');
Route::get('/team/{id}/edit','TeamController@edit');

// chemin uptdate
Route::post('/about/{id}/update','AboutController@update');
Route::post('/service/{id}/update','ServiceController@update');
Route::post('/subscribe/{id}/update','SubscribeController@update');
Route::post('/portfolio/{id}/update','PortfolioController@update');
Route::post('/testimonial/{id}/update','TestimonialController@update');
Route::post('/team/{id}/update','TeamController@update');

// chemin delete
Route::get('/about/{id}/destroy','AboutController@destroy');
Route::get('/service/{id}/destroy','ServiceController@destroy');
Route::get('/subscribe/{id}/destroy','SubscribeController@destroy');
Route::get('/portfolio/{id}/destroy','PortfolioController@destroy');
Route::get('/testimonial/{id}/destroy','TestimonialController@destroy');
Route::get('/team/{id}/destroy','TeamController@destroy');

// chemin create 

Route::get('/about/create','AboutController@create');
Route::get('/service/create','ServiceController@create');
Route::get('/subscribe/create','SubscribeController@create');
Route::get('/portfolio/create','PortfolioController@create');
Route::get('/testimonial/create','TestimonialController@create');
Route::get('/team/create','TeamController@create');

// chemin store
Route::post('/about/store','AboutController@store');
Route::post('/service/store','ServiceController@store');
Route::post('/subscribe/store','SubscribeController@store');
Route::post('/portfolio/store','PortfolioController@store');
Route::post('/testimonial/store','TestimonialController@store');
Route::post('/team/store','TeamController@store');