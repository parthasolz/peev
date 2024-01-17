<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SupervisorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('admin/login', [LoginController::class, 'create'])->name('admin.login');
Route::get('/home', function () {
    return view('admin.dashboard');
});
Route::post('admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::prefix('admin/project')->middleware('auth')->group(function () {
    Route::get('/create', [ProjectController::class, 'create'])->name('admin.project.create');
    Route::get('/', [ProjectController::class, 'index'])->name('admin.project.index');
    Route::post('/store', [ProjectController::class, 'store'])->name('admin.project.store');
    Route::get('view/{id}', [ProjectController::class, 'show'])->name('admin.project.show');
});

Route::prefix('admin/vendor')->middleware('auth')->group(function () {
    Route::get('/create', [VendorController::class, 'create'])->name('admin.vendor.create');
    Route::get('/', [VendorController::class, 'index'])->name('admin.vendor.index');
    Route::post('/store', [VendorController::class, 'store'])->name('admin.vendor.store');
    Route::get('/edit/{id}', [VendorController::class, 'edit'])->name('admin.vendor.edit');
    Route::post('/update/{id}', [VendorController::class, 'update'])->name('admin.vendor.update');
    Route::get('/trash/{id}', [VendorController::class, 'trash'])->name('admin.vendor.trash');
    Route::get('/restore/{id}', [VendorController::class, 'restore'])->name('admin.vendor.restore');
    Route::get('/trashed', [VendorController::class, 'trashed'])->name('admin.vendor.trashed');
    Route::get('/delete/{id}', [VendorController::class, 'delete'])->name('admin.vendor.delete');
});

Route::prefix('admin/supervisor')->middleware('auth')->group(function () {
    Route::get('/create', [SupervisorController::class, 'create'])->name('admin.supervisor.create');
    Route::get('/', [SupervisorController::class, 'index'])->name('admin.supervisor.index');
    Route::post('/store', [SupervisorController::class, 'store'])->name('admin.supervisor.store');
    Route::get('/edit/{id}', [SupervisorController::class, 'edit'])->name('admin.supervisor.edit');
    Route::post('/update/{id}', [SupervisorController::class, 'update'])->name('admin.supervisor.update');
    Route::get('/trash/{id}', [SupervisorController::class, 'trash'])->name('admin.supervisor.trash');
    Route::get('/restore/{id}', [SupervisorController::class, 'restore'])->name('admin.supervisor.restore');
    Route::get('/trashed', [SupervisorController::class, 'trashed'])->name('admin.supervisor.trashed');
    Route::get('/delete/{id}', [SupervisorController::class, 'delete'])->name('admin.supervisor.delete');
});
