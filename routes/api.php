<?php

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

Route::middleware('api')->group(function () {
    Route::resource('products', App\Http\Controllers\ProductController::class);
    Route::resource('document', App\Http\Controllers\DocumentController::class);
    Route::resource('documentType', App\Http\Controllers\DocumentTypeController::class);
    Route::get('teste', 'App\Http\Controllers\TesteTalyssonController@teste');
});
