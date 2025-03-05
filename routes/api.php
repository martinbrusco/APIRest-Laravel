<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
| API Routes
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
❘ be assigned to the "api" middleware group. Make something great!
I
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/// VERSIONAMOS LAS RUTAS
/* Route::group(['prefix'=>'v1', 'namespace'=>'App\Http\Controllers'], function(){

    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('invoices', InvoiceController::class);
} */
Route::prefix('v1')->group(function () {
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('invoices', InvoiceController::class);
});






?>