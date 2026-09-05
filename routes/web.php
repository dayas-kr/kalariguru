<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class)->name('home');

Route::view('/about', 'about')->name('about');

Route::get('/courses/{course:slug}', [CourseController::class, 'show'])->name('courses.show');

Route::view('/contact', 'contact')->name('contact');

Route::view('/gurukkal', 'gurukkal.show')->name('gurukkal.show');

Route::view('/kalaripayattu', 'pages.kalaripayattu')->name('kalaripayattu');

Route::view('/kalari-marma-therapy', 'pages.kalari-marma-therapy')->name('kalari-marma-therapy');

Route::view('/kalari-yoga', 'pages.kalari-yoga')->name('kalari-yoga');

Route::view('/terms-conditions', 'pages.terms-conditions')->name('terms-conditions');
Route::view('/privacy-policy', 'pages.privacy-policy')->name('privacy-policy');
Route::view('/refund-policy', 'pages.refund-policy')->name('refund-policy');

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
