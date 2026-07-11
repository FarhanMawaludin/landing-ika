<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home.index')->name('home');
Route::view('/berita', 'pages.news.index')->name('news.index');
Route::view('/agenda', 'pages.agenda.index')->name('agenda.index');
Route::view('/struktur', 'pages.organization.index')->name('organization.index');
Route::view('/galeri', 'pages.gallery.index')->name('gallery.index');
Route::view('/aspirasi', 'pages.aspiration.index')->name('aspiration.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
