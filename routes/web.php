<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TITtaskController;
use App\Http\Controllers\TITcategoryController;
use App\Http\Controllers\TITdashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [TITdashboardController::class, 'index'])->name('dashboard');
    Route::resource('tasks', TITtaskController::class);
    Route::resource('categories', TITcategoryController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';