<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/insert',[MediaController::class, 'insert']);
Route::get('/getAll',[MediaController::class,'getAll']);
Route::get('/getbyCategory/{category}',[MediaController::class, 'getbyCategory']);
Route::get('/getbyChannel/{channel}',[MediaController::class, 'getbyChannel']);

Route::get('/getallchannel',[MediaController::class,'getallchannel']);

Route::get('/getallcategory',[MediaController::class,'getallcategory']);

//Route::post("api/add",[MediaController::class,'add']);


