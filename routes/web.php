<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\DevhubMiddleware;
use App\Http\Controllers\Website\Developer;

// Dev Hub
Route::prefix('devhub')->name('developer.')->middleware(DevhubMiddleware::class)->group(function () {
    Route::get('/', [Developer\DevHubController::class, 'index'])->name('devhub.index');
});

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
