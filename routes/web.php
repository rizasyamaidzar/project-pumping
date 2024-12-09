<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReportPumpingController;

Route::middleware(['guest'])->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/register', function () {
        return view('register');
    });
});


// Route::post('/login', [RegisterController::class, 'login']);
// Route user yang sudah login Tanpa mengecek role
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/logout', [LoginController::class, 'logout']);
});
// Route user yang sudah login mengecek role Admin
Route::middleware(['isAdmin'])->group(function () {
    Route::get('/report-pumping', [ReportPumpingController::class, 'index']);
});

Route::group(['middleware' => ['isAdmin'], 'prefix' => 'users-management'], function () {
    Route::get('/', function () {
        return view('pages.users.index');
    });
    Route::get('/admin', function () {
        return view('pages.admin.index');
    });
});
// Route user yang sudah login mengecek role Mother
Route::middleware(['isMother'])->group(function () {
    Route::get('/my-report-pumping', [ReportPumpingController::class, 'myReport']);
    Route::get('/create-my-report', [ReportPumpingController::class, 'createReport']);
    Route::post('/create-my-report', [ReportPumpingController::class, 'storeReport']);
});
