<?php

use App\Http\Controllers\OnboardingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('onboarding')->group(function () {
    Route::get('/about-us', [OnboardingController::class, 'aboutUs'])->name('about.us');
    Route::get('/request-quote', [OnboardingController::class, 'requestQuote'])->name('request.quote');
    Route::get('/contact-us', [OnboardingController::class, 'contactUs'])->name('contact.us');

    Route::get('/review', [OnboardingController::class, 'review'])->name('review');
    Route::post('/review-post', [ReviewController::class, 'store'])->name('review.post');

    Route::view('/review', 'onboarding.review.index');

    Route::prefix('services')->group(function () {
        Route::get('/{slug}', [ServiceController::class, 'aService'])->name('a.service');

    });
    // Route::prefix('services')->group(function () {
    //     Route::get('/{slug}', [ServiceController::class, 'aService'])->name('a.service');

    // });


    Route::post('/book-service', [OnboardingController::class, 'bookService'])->name('book.service');



});





require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
