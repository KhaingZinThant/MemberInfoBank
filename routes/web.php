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
 Route::get('/', function() {
  	return view('indexAvoidFood');
  });
 Route::get('/avoidFood', function() {
   return view('indexAvoidFood');
  });
   Route::resource('avoidFoodCN', 'avoidFoodCtr');
   Route::apiResource('avoidFoodCN', 'avoidFoodCtr');

    Route::get('/userLevel', function() {
   return view('indexUserLevel');
  });
   Route::resource('userLevelCN', 'userLevelCtr');
   Route::apiResource('userLevelCN', 'userLevelCtr');

 // Route::get('/', function() {
 // 	return view('cityView');
 // });
 //  Route::resource('cityCN', 'cityCtr');
 //  Route::apiResource('cityCN', 'cityCtr');
 //  Route::get('/', function() {
 // 	return view('roomView');
 // });
 // Route::resource('roomCN', 'roomCtr');
 // Route::apiResource('roomCN', 'roomCtr');
// Route::get('dropdownlist','DataController@getCountries');
// Route::get('dropdownlist/getstates/{id}','DataController@getStates'); Route::get('/', function() {
//  	return view('addCountry');
//  });
//  Route::resource('countryCN', 'DataController');
//  Route::apiResource('countryCN', 'DataController');
//  Route::resource('infoCN', 'infoCtr');
//  Route::apiResource('infoCN', 'infoCtr');
  Route::get('/', function() {
  	return view('indexPersonType');
  });
 // Route::resource('buildingCN', 'buidingCtr');
 // Route::apiResource('buildingCN', 'buildingCtr');


Route::get('/personType', function () {
    return view('indexPersonType');
});
Route::resource('personTypeCN','personTypeCtr');
Route::apiResource('personTypeCN','personTypeCtr');

// Route::get('/', function () {
//     return view('careerView');
// });
// Route::resource('careerCN','careerCtr');
// Route::apiResource('careerCN','careerCtr');

// Route::get('/', function () {
//     return view('channelView');
// });
// Route::resource('channelCN','channelCtr');
// Route::apiResource('channelCN','channelCtr');


// Route::get('/', function () {
//     return view('floorView');
// });
// Route::resource('floorCN','floorCtr');
// Route::apiResource('floorCN','floorCtr');


// Route::get('/', function () {
//     return view('majorView');
// });
// Route::resource('majorCN','majorCtr');
// Route::apiResource('majorCN','majorCtr');

// Route::get('/', function () {
//     return view('nationalityView');
// });
// Route::resource('nationalityCN','nationalityCtr');
// Route::apiResource('nationalityCN','nationalityCtr');

// Route::get('/', function () {
//     return view('personStatusView');
// });
// Route::resource('personStatusCN','personStatusCtr');
// Route::apiResource('personStatusCN','personStatusCtr');


// Route::get('/', function () {
//     return view('religionView');
// });
// Route::resource('religionCN','reigionCtr');
// Route::apiResource('religionCN','religionCtr');

// Route::get('/', function () {
//     return view('roomStatusView');
// });
// Route::resource('roomStatusCN','roomStatusCtr');
// Route::apiResource('roomStatusCN','roomStatusCtr');


// Route::get('/', function () {
//     return view('roomTypeView');
// });
// Route::resource('roomTypeCN','roomTypeCtr');
// Route::apiResource('roomTypeCN','roomTypeCtr');

// Route::get('/', function () {
//     return view('supervisorView');
// });
// Route::resource('supervisorCN','supervisorCtr');
// Route::apiResource('supervisorCN','supervisorCtr');

// Route::get('/', function () {
//     return view('educationYearView');
// });
// Route::resource('educationYearCN','educationYearCtr');
// Route::apiResource('educationYearCN','educationYearCtr');


// Route::get('/', function () {
//     return view('educationView');
// });
// Route::resource('educationCN','educationCtr');
// Route::apiResource('educationCN','educationCtr');


// Route::get('/employeeView','EmployeeController@index');
// Route::post('/addImage','EmployeeController@store')->name('addImage'); 



// Route::get('create', 'DisplayDataController@create');
// Route::get('index', 'DisplayDataController@index');

// Route::resource('cityCN','cityCtr');
// Route::apiResource('cityCN','cityCtr');
// Route::get('create','cityCtr@create');
// Route::get('index','cityCtr@index'); 
//  Route::post('cityCN/store', 'cityCtr@store');
//  Route::get('cityCN/delete/{id}', 'cityCtr@destroy');


// Route::get('/education',function() {
//     return view('educationView');
// });
// Route::get('/religion',function() {
//     return view('religionView');
// });
// Route::get('/personType',function() {
//     return view('personTypeView');
// });
// Route::get('/career',function() {
//     return view('careerView');
// });
// Route::get('/city',function() {
//     return view('cityView');
// });
// Route::get('/major',function() {
//     return view('majorView');
// });
// Route::get('/educationYear',function() {
//     return view('educationYearView');
// });
// Route::get('/supervisor',function() {
//     return view('supervisorView');
// });
// Route::get('/personStatus',function() {
//     return view('personStatusView');
// });

Route::get('/layout', function () {
    return view('layout');
});
Route::get('/register',function(){
    return view('register');
});
Route::get('/',function(){
    return view('homepage');
});




   