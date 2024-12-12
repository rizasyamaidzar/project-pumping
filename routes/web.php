<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReportPumpingController;
use App\Http\Controllers\UserController;

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

Route::group(['middleware' => ['isAdmin'], 'prefix' => 'users-management'], function () {
    Route::get('/', [UserController::class, 'listUser']);
    Route::put('/', [UserController::class, 'updateUser']);
    Route::post('/delete-user', [UserController::class, 'deleteUser'])->name('user.delete');
    Route::get('/admin', [UserController::class, 'listAdmin']);
    Route::post('/admin', [UserController::class, 'createAdmin']);
    Route::post('/delete-admin', [UserController::class, 'deleteAdmin'])->name('admin.delete');
});
Route::group(['middleware' => ['isAdmin'], 'prefix' => 'report-pumping'], function () {
    Route::get('/', [ReportPumpingController::class, 'index']);
    Route::get('/{id}', [ReportPumpingController::class, 'view']);
    Route::get('/{tanggal}/{id}', [ReportPumpingController::class, 'viewDetail']);
});
// Route user yang sudah login mengecek role Mother
Route::middleware(['isMother'])->group(function () {
    Route::get('/my-report-pumping', [ReportPumpingController::class, 'myReport']);
    Route::get('/create-my-report', [ReportPumpingController::class, 'createReport']);
    Route::post('/create-my-report', [ReportPumpingController::class, 'storeReport']);
});
