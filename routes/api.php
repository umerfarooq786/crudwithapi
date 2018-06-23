<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/technicians','TechnicianController@indexforApi');
Route::get('/technician/{id}','TechnicianController@show');
Route::get('/category/{id}/items', function($id){
    return DB::table('items')
        ->select('items.*')
        ->where('items.category_id','=',$id)
        ->get();
});
Route::get('/item/{id}/brands', function($id){
    return DB::table('brands')
        ->select('brands.*')
        ->where('brands.item_id','=',$id)
        ->get();
});
Route::get('/categories','CategoryController@indexforApi');
Route::get('/category/{id}','CategoryController@show');