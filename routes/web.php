<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SiteController::class, 'index'])->name('index');

Route::prefix('staff')->name('staff.')->middleware(['auth'])->group(function (){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::prefix('/users')->name('users.')->group(function (){
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/profile/{id}', [UserController::class, 'profile'])->name('profile');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/create', [UserController::class, 'store'])->name('register');
        Route::get('/edit', [UserController::class, 'edit'])->name('edit');
        Route::put('/update', [UserController::class, 'update'])->name('update');
        Route::post('/logout', [UserController::class, 'logout'])->name('logout');
        Route::post('/change-status', [UserController::class, 'Status'])->name('Status');
        Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('destroy');
    });

    Route::get('no-access', [UserController::class, 'no_access'])->name('no-access');
});

require __DIR__.'/auth.php';
