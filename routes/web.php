<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminAbout;
use App\Http\Controllers\AdminGallery;
use App\Http\Controllers\AdminDasboard;
use App\Http\Controllers\LandingpageHomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;



Route::get('/', [LandingpageHomeController::class, 'index'])->name('landingpage.home');
Route::get('/testimoni', [LandingpageHomeController::class, 'testimoni'])->name('testimoni.home');

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/about', [LandingpageHomeController::class, 'about'])->name('about.home');
Route::get('/galeri', [LandingpageHomeController::class, 'galeri'])->name('galeri.home');
Route::get('/Dashboard', [AdminDasboard::class, 'index'])->name('AdminDasboard.home')->middleware('auth');

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

// --- ROUTE ADMIN GALLERY ---
Route::get('/admin/gallery', [AdminGallery::class, 'index'])->name('gallery.index');
Route::get('/admin/gallery/create', [AdminGallery::class, 'form'])->name('admin.gallery.create');
Route::get('/admin/gallery/{id}/edit', [AdminGallery::class, 'form'])->name('admin.gallery.edit');

Route::post('/admin/gallery/store', [AdminGallery::class, 'store'])->name('gallery.store');
Route::put('/admin/gallery/{id}', [AdminGallery::class, 'update'])->name('admin.gallery.update');
Route::delete('/admin/gallery/{id}', [AdminGallery::class, 'destroy'])
    ->name('gallery.destroy');
