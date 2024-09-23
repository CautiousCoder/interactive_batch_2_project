<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdminMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->get('/', function () {
    return view('home');
})->name("home");



Route::middleware('guest')->get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::middleware('guest')->get('/register', [AuthController::class, 'registerPage'])->name('register');

Route::middleware('guest')->post('/register', [AuthController::class, 'register'])->name('userRegister');
Route::middleware('guest')->post('/login', [AuthController::class, 'login'])->name('userLogin');

Route::middleware('auth')->prefix('user')->group(function (){
    Route::get('/profile', [UserController::class, 'index'])->name('user.profile');
    Route::get('/profile/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/profile', [UserController::class, 'update'])->name('user.update');
});


Route::middleware('auth')->get('/logout', function (Request $request) {
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
})->name("logout");
