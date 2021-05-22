<?php

use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Client\RegisterController;
use Illuminate\Support\Facades\Route;


Route::post('/register', [RegisterController::class, 'handle']);

Route::group(['prefix' => 'admin'], function () {
    Route::apiResource('users', UserAdminController::class)->except(['store', 'update']);
});
