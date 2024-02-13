<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ConsultController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PersonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function () {
    Route::apiResource('accounts', AccountController::class);
    Route::apiResource('persons', PersonController::class);
    Route::apiResource('doctors', DoctorController::class);
    Route::apiResource('consults', ConsultController::class);
});
