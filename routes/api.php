<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserDataController;
use App\Http\Controllers\Api\LoginController;

Route::apiResource('users', UserDataController::class);
Route::post('/login', [LoginController::class, 'login']);