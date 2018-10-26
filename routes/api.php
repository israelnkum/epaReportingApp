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

//display all clients
Route::get('clients','ClientController@index');

//create new Client
Route::post('client','ClientController@store');

//update client info
Route::put('client','ClientController@store');

////display client individual info
//Route::get('client/{id}','ClientController@show');
//

//login client
Route::get('client/{username}/{password}','ClientController@show');


//delete client individual info
Route::delete('client/{id}','ClientController@destroy');

