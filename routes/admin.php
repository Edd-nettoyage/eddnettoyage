<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OnboardingController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::get('/create-service', [AdminController::class, 'createService'])->name('create.service');
    Route::get('/create-category', [AdminController::class, 'createCategory'])->name('create.category');

});


