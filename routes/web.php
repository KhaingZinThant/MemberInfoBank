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



 // Route::get('/', function() {
 // 	return view('cityView');
 // });
  // Route::resource('cityCN', 'cityCtr');
  // Route::apiResource('cityCN', 'cityCtr');
  Route::get('/', function() {
 	return view('roomView');
 });
 Route::resource('roomCN', 'roomCtr');
 Route::apiResource('roomCN', 'roomCtr');
// Route::get('dropdownlist','DataController@getCountries');
// Route::get('dropdownlist/getstates/{id}','DataController@getStates'); Route::get('/', function() {
//  	return view('addCountry');
//  });
//  Route::resource('countryCN', 'DataController');
//  Route::apiResource('countryCN', 'DataController');
//  Route::resource('infoCN', 'infoCtr');
//  Route::apiResource('infoCN', 'infoCtr');





