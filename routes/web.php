<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', [App\Http\Controllers\AccountController::class, 'index'])->name('loginpage');

Route::post('/login', [App\Http\Controllers\AccountController::class, 'login'])->name('login');

Route::get('/logout', [App\Http\Controllers\AccountController::class, 'logout'])->name('logout');

Route::get('/settings/user', [App\Http\Controllers\SettingsController::class, 'index'])->name('settings');

Route::get('/', function () {
    return view('home.index');
});

Route::get('/signup', [App\Http\Controllers\AccountController::class, 'signup'])->name('signup');

Route::group(['prefix'=>'admin'], function(){
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');

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
