<?php

use App\Http\Controllers\Api\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\MyListController;
use App\Http\Controllers\Api\StarController;
use App\Http\Controllers\Api\TitleController;
use App\Http\Controllers\Api\UserController;

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
    Route::get('title', [TitleController::class, 'titles']);
    Route::get('title/{id?}', [TitleController::class, 'singleTitle']);
    Route::get('search/{name?}', [TitleController::class, 'searchTitles']);
    Route::get('mylist/{id}', [TitleController::class, 'myList']);
    Route::post('mylist', [MyListController::class, 'addRemoveIsMyList']);
    Route::post('avaliation', [StarController::class, 'avaliation']);
    Route::get('user/{id}', [UserController::class, 'show']);
    Route::post('user/{id}', [UserController::class, 'edit']);
    Route::post('user/password/{id}', [UserController::class, 'ChangePassword']);
    //Route::get('foods/{company}', [FoodController::class, 'getFoodsByCompany']);
});


Route::prefix('auth')->group(function () {
    Route::post('login', [LoginController::class, 'login']);
    Route::post('register', [RegisterController::class, 'register']);
    Route::post('login/social', [LoginController::class, 'loginSocial']);
});

