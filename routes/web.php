<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', [App\Http\Controllers\AccountController::class, 'loginGet'])->name('loginpage');

Route::post('/login', [App\Http\Controllers\AccountController::class, 'loginPost'])->name('login');

Route::get('/logout', [App\Http\Controllers\AccountController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('home.index');
});

Route::get('/seed_user', function () {
    $user = new App\Models\User();
    $user->name = 'John Doe';
    $user->email = 'john@doe.com';
    $user->password = bcrypt('password');
    $user->save();
    return
        [
            'name' => $user->name,
            'email' => $user->email,
            'password' => 'password'
        ];
});
