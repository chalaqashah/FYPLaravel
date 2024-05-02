<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'web','prefix' => 'v1'], function () {
    Route::post('/register', [App\Http\Controllers\API\AccountController::class, 'register'])->name('register');
});

Route::post('/register', [App\Http\Controllers\API\AccountController::class, 'register'])->name('register');

