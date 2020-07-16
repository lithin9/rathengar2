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

	use Illuminate\Http\Request;

	Route::get('/', function () {
    return view('welcome');
});

	Route::get('/character', function (Request $request) {
		return "This is a hello from Laravel! The connect worked properly.";
	});