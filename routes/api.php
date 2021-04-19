<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\ImageController;
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

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/user', function(Request $request) {
        return $request->user();
    });

    Route::get('/vendors', [VendorController::class, 'index']);
    Route::get('/servers/client', [ServerController::class, 'getUserServer']);
    Route::get('/servers', [ServerController::class, 'index']);
    Route::get('/images',  [ImageController::class, 'index']);


    Route::post('/server/user/new/{server}', [ServerController::class, 'addUserServer']);

    Route::post('/auth/logout', [AuthController::class, 'logout']);
});
