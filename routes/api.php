<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
Route::post('auth/register', [RegisterController::class, 'register']);
Route::post('auth/login', [LoginController::class, 'login']);
Route::post('auth/logout', [LogoutController::class, 'logout']);
