<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Auth\LoginController;

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
});

