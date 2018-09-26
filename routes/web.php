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

use Illuminate\Support\Facades\Auth;
Auth::routes();
Route::get('/home','HomeController@create')->middleware('auth');
Route::get('/','CategoryController@getCategories')->name('/index');
Route::resource('category','CategoryController');
Route::get('/Article','ArticleController@index');
Route::get('/createspecaility',function (){
    return view('specaility.createspecaility');
});
Route::get('/searchcategory','CategoryController@searchCategory');
Route::get('/createitem','ItemController@getCategory');
//Route::get('/selectitem','ItemController@getItem');
//Route::get('/category/{id}', function ($id) {
//    $items=DB::table('items')
//        ->select('items.*')
//        ->where('items.category_id', '=', $id)
//        ->get();
//    return view('item.selectitem',['item' => $items ]);
//});
Route::get('/items/{id}', 'ItemController@getItem');
Route::get('/brands/{id}/{category_id}', 'BrandController@getbrand');
Route::get('/faults/{id}/{category_id}/{brand->id}', function (){

});
Route::post('/insertitem','ItemController@create');
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
Route::get('/category', 'CategoryController@index');
Route::get('/item', 'ItemController@index');

Route::get('admin/logout',function (){
    Auth::logout();
    return redirect('/login');
});