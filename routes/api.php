<?php

use App\Http\Controllers\Api\Personnal\PassengerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\AddPassengerController;
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

Route::post('add/passenger/{id}/{sub_agency_id}',[PassengerController::class,'store']);
Route::post('passengers/{cni}/{name}/{type}/{telephone}/{seatNumber}/{isCheckPayment}/{travel_id}/{count}',[AddPassengerController::class,'add']);