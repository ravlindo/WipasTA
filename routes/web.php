<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminAbout;
use App\Http\Controllers\AdminGallery;
use App\Http\Controllers\AdminDasboard;
use App\Http\Controllers\AdminTestimonial;
use App\Http\Controllers\AdminNews;
use App\Http\Controllers\LandingpageHomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;



Route::get('/', [LandingpageHomeController::class, 'index'])->name('landingpage.home');
Route::get('/testimoni', [LandingpageHomeController::class, 'testimoni'])->name('testimoni.home');
Route::post('/testimoni/submit', [LandingpageHomeController::class, 'submitTestimonial'])->name('testimoni.submit');

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/about', [LandingpageHomeController::class, 'about'])->name('about.home');
Route::get('/galeri', [LandingpageHomeController::class, 'galeri'])->name('galeri.home');
Route::get('/news', [LandingpageHomeController::class, 'news'])->name('news.home');
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

// --- ROUTE ADMIN TESTIMONIAL ---
Route::get('/admin/testimonial', [AdminTestimonial::class, 'index'])->name('testimonial.index');
Route::get('/admin/testimonial/create', [AdminTestimonial::class, 'form'])->name('admin.testimonial.create');
Route::get('/admin/testimonial/{id}/edit', [AdminTestimonial::class, 'form'])->name('admin.testimonial.edit');

Route::post('/admin/testimonial/store', [AdminTestimonial::class, 'store'])->name('testimonial.store');
Route::put('/admin/testimonial/{id}', [AdminTestimonial::class, 'update'])->name('admin.testimonial.update');
Route::delete('/admin/testimonial/{id}', [AdminTestimonial::class, 'destroy'])
    ->name('testimonial.destroy');

// --- ROUTE ADMIN NEWS ---
Route::get('/admin/news', [AdminNews::class, 'index'])->name('news.index');
Route::get('/admin/news/create', [AdminNews::class, 'form'])->name('admin.news.create');
Route::get('/admin/news/{id}/edit', [AdminNews::class, 'form'])->name('admin.news.edit');

Route::post('/admin/news/store', [AdminNews::class, 'store'])->name('news.store');
Route::put('/admin/news/{id}', [AdminNews::class, 'update'])->name('admin.news.update');
Route::delete('/admin/news/{id}', [AdminNews::class, 'destroy'])
    ->name('news.destroy');
