<?php

use App\Http\Controllers\MpesaController;
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

Route::post("sts/access/token", [MpesaController::class, "generateAccessToken"]);
Route::post("sts/payment/confirmation", [MpesaController::class, "mpesaConfirmation"]);
Route::post("sts/validation", [MpesaController::class, "mpesaValidation"]);
Route::post("sts/register/urls", [MpesaController::class, "mpesaRegisterUrls"]);
Route::post("sts/simulate", [MpesaController::class, "simulateTransaction"]);
