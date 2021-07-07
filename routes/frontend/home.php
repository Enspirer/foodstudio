<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\TenantAndCuisineController;
use App\Http\Controllers\Frontend\WhatsOnController;
use App\Http\Controllers\Frontend\EventSpacesController;
use App\Http\Controllers\Frontend\MediaController;
use App\Http\Controllers\Frontend\FsStoreController;
use App\Http\Controllers\Frontend\CareersController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('index');
Route::get('/tenant-and-cuisines/{id}', [TenantAndCuisineController::class, 'index'])->name('index');
Route::get('/get-tenants-detail/{id}', [TenantAndCuisineController::class, 'gettenantdetail'])->name('gettenantdetail');
Route::get('/whats-on', [WhatsOnController::class, 'index'])->name('index');
Route::get('/event-spaces', [EventSpacesController::class, 'index'])->name('index');
Route::get('/media', [MediaController::class, 'index'])->name('index');
Route::get('/media-tenant', [MediaController::class, 'tenant'])->name('tenant');
Route::get('/media-video', [MediaController::class, 'video'])->name('video');
Route::get('/media-social', [MediaController::class, 'social'])->name('social');
Route::get('/fs-store', [FsStoreController::class, 'index'])->name('index');
Route::get('/careers', [CareersController::class, 'index'])->name('index');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('index');


Route::post('generaljob/insert', [CareersController::class, 'store'])->name('generaljob.store');
Route::post('opportunityjob/insert', [CareersController::class, 'storejob'])->name('opportunityjob.storejob');

Route::post('reservation/insert', [EventSpacesController::class, 'store'])->name('reservation.store');
Route::post('contactus/insert', [ContactUsController::class, 'store'])->name('contactus.store');



Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');

        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});
