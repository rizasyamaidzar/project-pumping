<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::middleware(['guest'])->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/register', function () {
        return view('register');
    });
});

Route::post('/logout', [LoginController::class, 'logout']);

// Route::post('/login', [RegisterController::class, 'login']);

Route::middleware(['isAdmin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.home');
    });

    Route::get('/users', function () {
        return 'Users';
    });
});



// datatables paginate
Route::get('/user', function () {
    return view('pages.user');
});
