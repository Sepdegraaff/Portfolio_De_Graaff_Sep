<?php

use App\Http\Controllers\PageControllers\ContactpageController;
use App\Http\Controllers\PageControllers\PortfoliopageController;
use App\Http\Controllers\PageControllers\HomepageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index'])->name('home');

Route::get('/portfolio', [PortfoliopageController::class, 'index'])->name('portfolio');

Route::get('/contact', [ContactpageController::class, 'index'])->name('contact');
