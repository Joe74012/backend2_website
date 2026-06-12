<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GamesListController;
use App\Http\Controllers\GamesMakeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::prefix('/game')->group(function () {
        Route::get('/games', [GamesListController::class, 'redirect'])->name('GamesListController.redirect');
        Route::get('/make', [GamesMakeController::class, 'redirect'])->name('GamesMakeController.redirect');
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
