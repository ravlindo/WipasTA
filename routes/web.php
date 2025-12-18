<?php

use App\Http\Controllers\AdminDasboard;
use App\Http\Controllers\LandingpageHomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [LandingpageHomeController::class, 'index'])->name('landingpage.home');
Route::get('/Dasboard', [AdminDasboard::class,  'index'])->name('AdminDasboard.home');
