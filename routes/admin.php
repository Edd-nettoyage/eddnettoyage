<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CoverageController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\OnboardingController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::post('/create-service', [AdminController::class, 'createService'])->name('create.service');
    Route::get('/create-service-view', [AdminController::class, 'createServiceView'])->name('create.service.view');

    Route::post('/edit-service/{service?}', [AdminController::class, 'editService'])->name('edit.service');

    Route::get('/all-service-view', [AdminController::class, 'allServiceView'])->name('all.service.view');
    Route::get('/show-service-view/{service?}', [AdminController::class, 'showServiceView'])->name('show.service.view');

    Route::get('/create-category-view', [AdminController::class, 'createCategoryView'])->name('create.category.view');
    Route::post('/create-category', [AdminController::class, 'createCategory'])->name('create.category');
    Route::post('/update-category/{id}', [AdminController::class, 'updateCategory'])->name('update.category');

    Route::get('/all-review-view', [AdminController::class, 'allReviewView'])->name('all.review.view');
    Route::get('/delete-review/{review?}', [AdminController::class, 'deleteReview'])->name('delete.review');
    Route::post('/status-review/{review?}', [AdminController::class, 'statusReview'])->name('status.review');


    Route::prefix('faq')->group(function () {
        // Route::view('/faq-view', 'admin.faq-manager.index')->name('faq.view');
        Route::get('/faq-view', [FaqController::class, 'viewFaq'])->name('faq.view');
        Route::post('/faq', [FaqController::class, 'store'])->name('faq.store');
        Route::post('/faq-edit/{faq?}', [FaqController::class, 'updateFaq'])->name('faq.update');
        Route::get('/faq-delete/{faq?}', [FaqController::class, 'deleteFaq'])->name('faq.delete');

    });
    Route::prefix('company')->group(function () {
        Route::get('/affiliates-view', [CompanyController::class, 'viewAffiliates'])->name('company.view');
        Route::post('/company', [CompanyController::class, 'store'])->name('company.store');

        Route::get('/affiliate-delete/{affiliate?}', [CompanyController::class, 'deleteAffiliate'])->name('affiliate.delete');
        Route::post('/affiliate-update/{affiliate?}', [CompanyController::class, 'updateAffiliate'])->name('affiliate.update');

    });
    Route::prefix('coverage')->group(function () {
        Route::get('/coverage-view', [CoverageController::class, 'viewCoverage'])->name('coverage.view');
        Route::post('/coverage', [CoverageController::class, 'store'])->name('coverage.store');


        Route::get('/coverage-delete/{coverage?}', [CoverageController::class, 'deleteCoverage'])->name('coverage.delete');
        Route::post('/coverage-update/{coverage?}', [CoverageController::class, 'updateCoverage'])->name('coverage.update');

    });
    Route::prefix('works')->group(function () {
        Route::get('/how-it-works-view', [AdminController::class, 'workView'])->name('work.view');
        Route::post('/work', [AdminController::class, 'storeWork'])->name('work.store');


        Route::get('/works-delete/{works?}', [AdminController::class, 'deleteWork'])->name('works.delete');
        Route::post('/works-update/{works?}', [AdminController::class, 'updateWork'])->name('works.update');


    });
    Route::prefix('commitment')->group(function () {
        Route::post('/store', [AdminController::class, 'storeCommitment'])->name('commitment.store');

        Route::get('/commitment-delete/{commitment?}', [AdminController::class, 'deleteCom'])->name('commitment.delete');
        Route::post('/commitment-update/{commitment?}', [AdminController::class, 'updateCom'])->name('commitment.update');
    });

    Route::prefix('booking')->group(function () {
        Route::post('/update-booking-status/{booking}', [AdminController::class, 'updateBookingStatus'])->name('update.booking.status');
        Route::post('/reply-booker-mail/{booking}', [AdminController::class, 'replyBooker'])->name('reply.booker.mail');


        Route::get('/all-bookings', [AdminController::class, 'allBooking'])->name('all.booking.view');
        Route::get('/seen-bookings', [AdminController::class, 'seenBooking'])->name('seen.booking.view');
        Route::get('/done-bookings', [AdminController::class, 'doneBooking'])->name('done.booking.view');
        Route::get('/booked-bookings', [AdminController::class, 'bookedBooking'])->name('booked.booking.view');
        Route::get('/single-booking/{service?}', [AdminController::class, 'serviceBooking'])->name('service.booking.view');

    });


});


