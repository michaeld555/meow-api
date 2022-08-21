<?php

use App\Http\Controllers\Api\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\RegisterController;

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

Route::middleware('auth:sanctum')->group(function () {
    //Route::get('user/{id}', [UserController::class, 'show']);
    //Route::put('user/{id}', [UserController::class, 'update']);
    //Route::delete('user/{id}', [UserController::class, 'destroy']);
    //Route::get('foods/{company}', [FoodController::class, 'getFoodsByCompany']);
});


Route::prefix('auth')->group(function () {
    Route::post('login', [LoginController::class, 'login']);
    Route::post('register', [RegisterController::class, 'register']);
    //Route::post('login/social', [LoginController::class, 'loginSocial']);
});

