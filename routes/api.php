<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\API\Penjualan\PenjualanControllerAPI;
use App\Http\Controllers\API\Auth\AuthController;
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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['prefix' => 'penjualan'], function () {
    Route::group(['middleware' => 'auth:api'], function () {

        Route::get('get_all', [PenjualanControllerAPI::class, 'GetAll']);
        Route::post('tambah', [PenjualanControllerAPI::class, 'store']);
        Route::post('update', [PenjualanControllerAPI::class, 'update']);
        Route::post('hapus', [PenjualanControllerAPI::class, 'destroy']);
    });
});

// Route::post('register', 'Api\Auth\AuthController@register');
// Route::post('login', 'Api\Auth\AuthController@logi');
