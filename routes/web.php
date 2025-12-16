<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PollController;
use Illuminate\Support\Facades\Route;
use App\Models\Poll;

// Halaman Welcome/Landing (Public)
Route::get('/', function () {
    $poll = Poll::with('options')->first();
    return view('welcome', compact('poll'));
})->name('welcome');

// Halaman Aturan (Public)
Route::get('/rules', function () {
    return view('rules');
})->name('rules');

// Halaman Kontak
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Redirect dashboard ke welcome
Route::get('/dashboard', function () {
    return redirect()->route('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes Polling (Requires Authentication)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/poll', [PollController::class, 'index'])->name('poll');
    Route::post('/vote', [PollController::class, 'vote'])->name('vote');
    Route::get('/results', [PollController::class, 'results'])->name('results');
    Route::post('/reset', [PollController::class, 'reset'])->name('reset');
});

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
