<?php

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

Route::get('/predstava',[PredstavaController::class,'index']);
Route::get('/predstava/{id}',[PredstavaController::class,'show']);

Route::get('/izvodjenje',[IzvodjenjeController::class,'index']);
Route::get('/izvodjenje/{id}',[IzvodjenjeController::class,'show']);

Route::delete('/izvodjenje/{id}',[IzvodjenjeController::class,'destroy']);
Route::post('/izvodjenje',[IzvodjenjeController::class,'store']);

Route::put('/izvodjenje/{id}',[IzvodjenjeController::class,'update']);
