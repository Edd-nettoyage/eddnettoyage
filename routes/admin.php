<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OnboardingController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::get('/create-service-view', [AdminController::class, 'createServiceView'])->name('create.service.view');
    Route::post('/create-service', [AdminController::class, 'createService'])->name('create.service');

    Route::get('/create-category-view', [AdminController::class, 'createCategoryView'])->name('create.category.view');
    Route::post('/create-category', [AdminController::class, 'createCategory'])->name('create.category');
    Route::post('/update-category/{id}', [AdminController::class, 'updateCategory'])->name('update.category');


});


