<?php

use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\IzvodjenjeController;
use App\Http\Controllers\PredstavaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/register',[AuthContoller::class,'register']);
Route::post('/login',[AuthContoller::class,'login']);

Route::get('/predstava',[PredstavaController::class,'index']);
Route::get('/predstava/{id}',[PredstavaController::class,'show']);

Route::get('/izvodjenje',[IzvodjenjeController::class,'index']);
Route::get('/izvodjenje/{id}',[IzvodjenjeController::class,'show']);



Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/logout',[AuthContoller::class,'logout']);
    Route::delete('/izvodjenje/{id}',[IzvodjenjeController::class,'destroy']);
    Route::post('/izvodjenje',[IzvodjenjeController::class,'store']);
    Route::put('/izvodjenje/{id}',[IzvodjenjeController::class,'update']);

    
});