<?php

use App\Events\NotificationBroadcast;
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
Route::post('bookservice', 'BookServiceController@store');
Route::delete('bookservice/{id}', 'BookServiceController@destroy');
Route::put('bookservice/{id}', 'BookServiceController@update');
Route::get('bookservice', 'BookServiceController@bookservice');
Route::get('/faults', function () {
    return DB::table('faults')
        ->select('faults.*')
        ->get();
});
Route::post('register/user',"CustomerController@registeration");
Route::post('login/user',"CustomerController@login");
Route::get('/technicians', 'TechnicianController@indexforApi');
Route::get('/technician/{id}', 'TechnicianController@show');
Route::get('/category/{id}/items', function ($id) {
    return DB::table('items')
        ->select('items.*')
        ->where('items.category_id', '=', $id)
        ->get();
});
Route::get('/item/{id}/brands', function ($id) {
    return DB::table('brands')
        ->select('brands.*')
        ->where('brands.item_id', '=', $id)
        ->get();
});
Route::get('/categories', 'CategoryController@indexforApi');
Route::get('/category/{id}', 'CategoryController@show');
