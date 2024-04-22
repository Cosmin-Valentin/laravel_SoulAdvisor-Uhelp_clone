<?php

require __DIR__.'/auth.php';

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UHelp\TicketController;
use App\Http\Controllers\SoulAdvisor\ProfileController as SoulAdvisorProfileController;
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

Route::prefix('list-practice')->group(function() {
    Route::get('/', [SoulAdvisorProfileController::class, 'index'])->name('list-practice.index');
    Route::get('/create', [SoulAdvisorProfileController::class, 'create'])->name('list-practice.create');
    Route::post('/create', [SoulAdvisorProfileController::class, 'store'])->name('list-practice.store');
    Route::patch('/{profile}', [SoulAdvisorProfileController::class, 'update'])->name('list-practice.update');
    Route::get('/show', [SoulAdvisorProfileController::class, 'show'])->name('list-practice.show');
});

Route::prefix('uhelp')->group(function() {
    Route::get('/', [TicketController::class, 'index'])->name('uhelp.index');
    Route::get('/tickets/{ticket}', [TicketController::class, 'show'])->name('uhelp.show');
    Route::post('/reply', [TicketController::class, 'storeReply'])->name('uhelp.storeReply');
    Route::get('/create', [TicketController::class, 'create'])->name('uhelp.create');
    Route::post('/create', [TicketController::class, 'store'])->name('uhelp.store');
    Route::post('/update-ticket/{ticket}', [TicketController::class, 'updateTicket'])->name('uhelp.updateTicket');
});