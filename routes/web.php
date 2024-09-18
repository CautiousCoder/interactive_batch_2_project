<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware(IsAdminMiddleware::class)->get('/', function () {
    return view('home');
})->name("home");



Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::get('/register', [AuthController::class, 'registerPage'])->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('userRegister');
Route::post('/login', [AuthController::class, 'login'])->name('userLogin');

Route::middleware(IsAdminMiddleware::class)->prefix('user')->group(function (){
    Route::get('/profile', [UserController::class, 'index'])->name('user.profile');
    Route::get('/profile/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/profile', [UserController::class, 'store'])->name('user.store');
});


Route::middleware(IsAdminMiddleware::class)->get('/logout', function () {
    session()->flush();
    return to_route('login');
})->name("logout");
