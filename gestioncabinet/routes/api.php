<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ordController;
use App\Http\Controllers\PdfController;
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
#Route::get('index',[ordController::class,'index']);
Route::get('ordonnances', [ordController::class, 'index']);
Route::post('ordonnances',[ordController::class,'store']);
Route::get('ordonnances/{id}',[ordController::class,'show']);
Route::get('ordonnances/{id}/edit',[ordController::class,'edit']);
Route::put('ordonnances/{id}',[ordController::class,'update']);
Route::delete('ordonnances/{id}',[ordController::class,'destroy']);
Route::get('ordpdf/{id}',[PdfController::class,'pdf']);