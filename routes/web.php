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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category','CategoryController');
Route::get('/Article','ArticleController@index');
Route::get('/createspecaility',function (){
    return view('specaility.createspecaility');
});

Route::get('/createtechnician','TechnicianController@getSpecaility');
Route::post('/inserttechnician','TechnicianController@create');
Route::get('/technician','TechnicianController@index');
Route::post('/insertspecaility','SpecailityController@create');
Route::get('/update/{id}','ArticleController@update');
Route::get('/specaility', 'SpecailityController@index');
Route::get('/updatespecaility/{id}','SpecailityController@update');
Route::post('/editspecaility/{id}','SpecailityController@edit');
Route::get('/deletespecaility/{id}','SpecailityController@delete');
Route::get('/technician', 'TechnicianController@index');