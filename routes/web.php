<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\Admin\LayoutController;
use App\Http\Controllers\Admin\MainPagesController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');

Route::get('/dashboard', [LayoutController::class, 'index'])->name('dashboard');
Route::get('/dashboard/main', [MainPagesController::class, 'index'])->name('dashboard.main');
Route::put('/dashboard/main/update', [MainPagesController::class, 'update'])->name('admin.main.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
