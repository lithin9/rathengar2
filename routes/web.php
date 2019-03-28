<?php

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
    return view('welcome');
});

Route::prefix('/')->group(function(){
  Route::get('','dashboard\mainController@index');
});

Route::prefix('/characters')->group(function(){
  Route::get('','characters\mainController@index')->name('characters');
});

Route::prefix('/worlds')->group(function(){
	Route::get('','worlds\mainController@index')->name('worlds');
});

Route::prefix('/user')->group(function(){
	Route::get('','user\mainController@index')->name('user');
});

Route::prefix('/campaigns')->group(function(){
	Route::get('','campaigns\mainController@index')->name('campaigns');
});

