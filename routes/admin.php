<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CoverageController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\OnboardingController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::get('/create-service-view', [AdminController::class, 'createServiceView'])->name('create.service.view');
    Route::post('/create-service', [AdminController::class, 'createService'])->name('create.service');

    Route::get('/create-category-view', [AdminController::class, 'createCategoryView'])->name('create.category.view');
    Route::post('/create-category', [AdminController::class, 'createCategory'])->name('create.category');
    Route::post('/update-category/{id}', [AdminController::class, 'updateCategory'])->name('update.category');


    Route::prefix('faq')->group(function () {
        Route::view('/faq-view', 'admin.faq-manager.index')->name('faq.view');
        Route::post('/faq', [FaqController::class, 'store'])->name('faq.store');

    });
    Route::prefix('company')->group(function () {
        Route::view('/company-view', 'admin.company-management.index')->name('company.view');
        Route::post('/company', [CompanyController::class, 'store'])->name('company.store');

    });
    Route::prefix('coverage')->group(function () {
        Route::view('/coverage-view', 'admin.coverage-management.index')->name('coverage.view');
        Route::post('/coverage', [CoverageController::class, 'store'])->name('coverage.store');

    });


});


