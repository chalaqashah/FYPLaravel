<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authorize;
use Spatie\Permission\Middleware\RoleMiddleware;

Route::get('/login', [App\Http\Controllers\AccountController::class, 'index'])->name('loginpage');

Route::post('/login', [App\Http\Controllers\AccountController::class, 'login'])->name('login');

Route::get('/logout', [App\Http\Controllers\AccountController::class, 'logout'])->name('logout');

Route::get('/settings/user', [App\Http\Controllers\SettingsController::class, 'index'])->name('settings');

Route::get('/', function () {
    return view('home.index');
});

Route::get('/signup', [App\Http\Controllers\AccountController::class, 'signup'])->name('signup');

Route::group(['prefix'=>'admin','middleware'=>[\Spatie\Permission\Middleware\RoleMiddleware::using('admin')]], function(){
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');

});
Route::group(['prefix'=>'client','middleware'=>[\Spatie\Permission\Middleware\RoleMiddleware::using('client')]], function(){
    Route::get('/dashboard', [App\Http\Controllers\ClientController::class, 'index'])->name('client.dashboard');
    Route::get('/cases', [App\Http\Controllers\ClientController::class, 'cases'])->name('client.cases');
    Route::get('/cases/{id}', [App\Http\Controllers\ClientController::class, 'case'])->name('client.cases.case');
    Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('settings');

});

Route::get('/dashboard',function() {
    if (Auth::check()) {
        $auth = Auth::user();
        $user = App\Models\User::find($auth->id);
        if ( $user->hasRole('admin') ) {
            return redirect()->route('admin.dashboard');
        } else if ( $user->hasRole('client')) {
            return redirect()->route('client.dashboard');
        }
    }
    // return not found

    return redirect('/');
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
