<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BusController;
use App\Http\Controllers\Api\BordereauController;
use App\Http\Controllers\Api\User\AddPassengerController;
use App\Http\Controllers\Api\Personnal\PassengerController;


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

Route::post('add/passenger/{id}/{sub_agency_id}/{amount}/{amountReimbursed}',[PassengerController::class,'store']);
Route::post('passengers/{travel_id}/{subagency}',[AddPassengerController::class,'add']);
Route::get('all/bordereau/{id}/{travel_id}',[BordereauController::class,'all']);
Route::get('all/bus',[BusController::class,'index']);
Route::post('bus/create',[BusController::class,'store']);
