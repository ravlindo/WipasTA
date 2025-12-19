<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminAbout;
use App\Http\Controllers\AdminDasboard;
use App\Http\Controllers\LandingpageHomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [LandingpageHomeController::class, 'index'])->name('landingpage.home');
Route::get('/testimoni', [LandingpageHomeController::class, 'testimoni'])->name('testimoni.home');

Route::get('/login', [LandingpageHomeController::class, 'login'])->name('login.home');
Route::get('/register', [LandingpageHomeController::class, 'register'])->name('register.home');

Route::get('/about', [LandingpageHomeController::class, 'about'])->name('about.home');
Route::get('/Dashboard', [AdminDasboard::class, 'index'])->name('AdminDasboard.home');

// --- ROUTE ADMIN ABOUT ---
// 1. Route untuk menampilkan halaman (sesuai redirect di controller: about.index)
Route::get('/admin/about', [AdminAbout::class, 'index'])->name('about.index');
Route::get('/admin/about/create', [AdminAbout::class, 'form'])->name('admin.about.create');
Route::get('/admin/about/{id}/edit', [AdminAbout::class, 'form'])->name('admin.about.edit');
Route::get('/admin/about/form', [AdminAbout::class, 'form'])->name('about.form');

// 2. Route untuk menyimpan data dari form (POST)
Route::post('/admin/about/store', [AdminAbout::class, 'store'])->name('about.store');
Route::put('/admin/about/{id}', [AdminAbout::class, 'update'])->name('admin.about.update');
Route::delete('/admin/about/{id}', [AdminAbout::class, 'destroy'])
    ->name('about.destroy');
