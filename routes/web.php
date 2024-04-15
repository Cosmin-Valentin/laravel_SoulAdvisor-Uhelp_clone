<?php

require __DIR__.'/auth.php';

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileCreationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/list-practice', [ProfileCreationController::class, 'index']);
Route::get('/list-practice/create', [ProfileCreationController::class, 'create']);
Route::post('/list-practice/create', [ProfileCreationController::class, 'store']);
Route::patch('/list-practice/{profile}', [ProfileCreationController::class, 'update']);
Route::get('/list-practice/show', [ProfileCreationController::class, 'show']);

