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



Route::resource('cityCN','cityCtr');
Route::apiResource('cityCN','cityCtr');



Route::resource('roomCN','roomCtr');
Route::apiResource('roomCN','roomCtr');




Route::resource('buildingCN','buildingCtr');
Route::apiResource('buildingCN','buildingCtr');



Route::resource('personTypeCN','personTypeCtr');
Route::apiResource('personTypeCN','personTypeCtr');


Route::resource('careerCN','careerCtr');
Route::apiResource('careerCN','careerCtr');


Route::resource('channelCN','channelCtr');
Route::apiResource('channelCN','channelCtr');



Route::resource('floorCN','floorCtr');
Route::apiResource('floorCN','floorCtr');



Route::resource('majorCN','majorCtr');
Route::apiResource('majorCN','majorCtr');


Route::resource('nationalityCN','nationalityCtr');
Route::apiResource('nationalityCN','nationalityCtr');


Route::resource('personStatusCN','personStatusCtr');
Route::apiResource('personStatusCN','personStatusCtr');



Route::resource('religionCN','reigionCtr');
Route::apiResource('religionCN','religionCtr');


Route::resource('roomStatusCN','roomStatusCtr');
Route::apiResource('roomStatusCN','roomStatusCtr');



Route::resource('roomTypeCN','roomTypeCtr');
Route::apiResource('roomTypeCN','roomTypeCtr');


Route::resource('supervisorCN','supervisorCtr');
Route::apiResource('supervisorCN','supervisorCtr');


Route::resource('educationYearCN','educationYearCtr');
Route::apiResource('educationYearCN','educationYearCtr');



Route::resource('educationCN','educationCtr');
Route::apiResource('educationCN','educationCtr');






Route::get('create', 'DisplayDataController@create');
Route::get('index', 'DisplayDataController@index');


Route::get('/', function () {
    return view('register');
});
Route::get('/loginView', function () {
    return view('loginView');
});
Route::resource('/loginCN','loginCtr');
Route::apiResource('/loginCN','loginCtr');
 

 
 Route::get('/personType', function () {
    return view('indexPersonType');

 });
 Route::get('/major', function () {
     return view('majorView');
   
 });
 Route::get('/education', function () {
     return view('educationView');
   
 });
 Route::get('/nationality', function () {
     return view('nationalityView');
   
 });
 Route::get('/city', function () {
     return view('indexCity');
   
 });
 Route::get('/religion', function () {
     return view('religionView');
   
 });
 Route::get('/channel', function () {
     return view('channelView');
   
 });
 Route::get('/supervisor', function () {
     return view('supervisorView');
   
 });
 Route::get('/personStatus', function () {
     return view('indexPersonStatus');
   
 });
 Route::get('/job', function () {
    return view('indexJob');
});
Route::resource('jobCN','jobCtr');
Route::apiResource('jobCN','jobCtr');

Route::get('/school', function () {
    return view('schoolView');
});
Route::resource('schoolCN','schoolCtr');
Route::apiResource('schoolCN','schoolCtr');

Route::get('/layout', function () {
    return view('layout');
});
Route::get('/register',function(){
    return view('register');
});
Route::get('/',function(){
    return view('homepage');
});
Route::get('/disease',function(){
    return view('indexDisease');
});
Route::resource('diseaseCN','diseaseCtr');
Route::apiResource('diseaseCN','diseaseCtr');
Route::get('/room',function(){
    return view('indexRoom');
});
Route::get('/table',function(){
    return view('indexTable');
});
Route::resource('tableCN','tableCtr');
Route::apiResource('tableCN','tableCtr');
Route::get('index','cityCtr@index');
