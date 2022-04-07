<?php

use App\Http\Controllers\api\KelurahanController;
use App\Http\Controllers\api\MasyarakatController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('masyarakat', [MasyarakatController::class, 'index']);
Route::post('masyarakat', [MasyarakatController::class, 'store']);
Route::post('masyarakat/{id}', [MasyarakatController::class, 'update']);
Route::delete('masyarakat/{id}', [MasyarakatController::class, 'destroy']);

Route::get('kelurahan', [KelurahanController::class, 'index']);
Route::post('kelurahan', [KelurahanController::class, 'store']);
Route::post('kelurahan/{id}', [KelurahanController::class, 'update']);
Route::delete('kelurahan/{id}', [KelurahanController::class, 'destroy']);
