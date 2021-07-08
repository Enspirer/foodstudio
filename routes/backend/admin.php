<?php

use App\Http\Controllers\Backend\DashboardController;

use App\Http\Controllers\Backend\HomeController;

use App\Http\Controllers\Backend\JobGroupController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\BranchController;
use App\Http\Controllers\Backend\TenantController;

use App\Http\Controllers\Backend\FeatureEventsController;
use App\Http\Controllers\Backend\PromotionsController;
use App\Http\Controllers\Backend\VouchersController;

use App\Http\Controllers\Backend\CorporateNewsController;
use App\Http\Controllers\Backend\TenantNewsController;
use App\Http\Controllers\Backend\VideoController;
use App\Http\Controllers\Backend\SocialResponsibilityController;

use App\Http\Controllers\Backend\JobOpportunityController;
use App\Http\Controllers\Backend\ContactsController;
use App\Http\Controllers\Backend\EventsController;
use App\Http\Controllers\Backend\ReservationsController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('home', [HomeController::class, 'index'])->name('home.index');
Route::post('home/insert', [HomeController::class, 'store'])->name('home.store');
Route::get('home/getdetails', [HomeController::class, 'GetTableDetails'])->name('home.GetTableDetails');
Route::get('home/edit/{id}', [HomeController::class, 'edit'])->name('home.edit');
Route::post('home/update', [HomeController::class, 'update'])->name('home.update');
Route::get('home/delete/{id}', [HomeController::class, 'destroy'])->name('home.destroy');

Route::get('jobgroup', [JobGroupController::class, 'index'])->name('jobgroup.index');
Route::post('jobgroup/insert', [JobGroupController::class, 'add_job_group'])->name('jobgroup.add_job_group');
Route::get('jobgroup/getdetails', [JobGroupController::class, 'GetTableDetails'])->name('jobgroup.GetTableDetails');
Route::get('jobgroup/edit/{id}', [JobGroupController::class, 'edit'])->name('jobgroup.edit');
Route::post('jobgroup/update', [JobGroupController::class, 'update_job'])->name('jobgroup.update_job');
Route::get('jobgroup/delete/{id}', [JobGroupController::class, 'destroy'])->name('jobgroup.destroy');

Route::get('team', [TeamController::class, 'index'])->name('team.index');
Route::post('team/insert', [TeamController::class, 'add_team'])->name('team.add_team');
Route::get('team/getdetails', [TeamController::class, 'GetTableDetails'])->name('team.GetTableDetails');
Route::get('team/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
Route::post('team/update', [TeamController::class, 'update_team'])->name('team.update_team');
Route::get('team/delete/{id}', [TeamController::class, 'destroy'])->name('team.destroy');

Route::get('tenant', [BranchController::class, 'index'])->name('tenant.index');
Route::post('tenant/insert', [BranchController::class, 'store'])->name('tenant.store');
Route::get('tenant/getdetails', [BranchController::class, 'GetTableDetails'])->name('tenant.GetTableDetails');
Route::get('tenant/edit/{id}', [BranchController::class, 'edit'])->name('tenant.edit');
Route::post('tenant/update', [BranchController::class, 'update'])->name('tenant.update');
Route::get('tenant/delete/{id}', [BranchController::class, 'destroy'])->name('tenant.destroy');

Route::get('tenant/cuisine/{id}', [BranchController::class, 'cuisine_index'])->name('tenant.cuisine_index');
Route::post('tenant/cuisine', [BranchController::class, 'cuisine_store'])->name('tenant.cuisine_store');
Route::get('tenant/cgetdetails/{id}', [BranchController::class, 'GetTableDetailsCuisine'])->name('tenant.GetTableDetailsCuisine');
Route::get('tenant/cuisine/tenant/cdelete/{id}', [BranchController::class, 'cuisine_destroy'])->name('tenant.cuisine_destroy');

// Route::get('tenant/cuisine/{id}', [TenantController::class, 'cuisine_index'])->name('tenant.cuisine_index');
// Route::post('tenant/cuisine', [TenantController::class, 'cuisine_store'])->name('cuisine.cuisine_store');
// Route::get('tenant/cgetdetails/{id}', [TenantController::class, 'GetTableDetailsCuisine'])->name('tenant.GetTableDetailsCuisine');
// Route::get('tenant/cedit/{id}', [TenantController::class, 'cuisine_edit'])->name('tenant.cuisine_edit');
// Route::post('tenant/cupdate', [TenantController::class, 'cuisine_update'])->name('tenant.cuisine_update');
// Route::get('tenant/cuisine/tenant/cdelete/{id}', [TenantController::class, 'cuisine_destroy'])->name('tenant.cuisine_destroy');

Route::get('tenants', [TenantController::class, 'index'])->name('tenants.index');
Route::post('tenants/insert', [TenantController::class, 'store'])->name('tenants.store');
Route::get('tenants/getdetails', [TenantController::class, 'GetTableDetails'])->name('tenants.GetTableDetails');
Route::get('tenants/edit/{id}', [TenantController::class, 'edit'])->name('tenants.edit');
Route::post('tenants/update', [TenantController::class, 'update'])->name('tenants.update');
Route::get('tenants/delete/{id}', [TenantController::class, 'destroy'])->name('tenants.destroy');

Route::get('feature', [FeatureEventsController::class, 'index'])->name('feature.index');
Route::post('feature/insert', [FeatureEventsController::class, 'store'])->name('feature.store');
Route::get('feature/getdetails', [FeatureEventsController::class, 'GetTableDetails'])->name('feature.GetTableDetails');
Route::get('feature/edit/{id}', [FeatureEventsController::class, 'edit'])->name('feature.edit');
Route::post('feature/update', [FeatureEventsController::class, 'update'])->name('feature.update');
Route::get('feature/delete/{id}', [FeatureEventsController::class, 'destroy'])->name('feature.destroy');

Route::get('promotion', [PromotionsController::class, 'index'])->name('promotion.index');
Route::post('promotion/insert', [PromotionsController::class, 'store'])->name('promotion.store');
Route::get('promotion/getdetails', [PromotionsController::class, 'GetTableDetails'])->name('promotion.GetTableDetails');
Route::get('promotion/edit/{id}', [PromotionsController::class, 'edit'])->name('promotion.edit');
Route::post('promotion/update', [PromotionsController::class, 'update'])->name('promotion.update');
Route::get('promotion/delete/{id}', [PromotionsController::class, 'destroy'])->name('promotion.destroy');

Route::get('voucher', [VouchersController::class, 'index'])->name('voucher.index');
Route::post('voucher/insert', [VouchersController::class, 'store'])->name('voucher.store');
Route::get('voucher/getdetails', [VouchersController::class, 'GetTableDetails'])->name('voucher.GetTableDetails');
Route::get('voucher/edit/{id}', [VouchersController::class, 'edit'])->name('voucher.edit');
Route::post('voucher/update', [VouchersController::class, 'update'])->name('voucher.update');
Route::get('voucher/delete/{id}', [VouchersController::class, 'destroy'])->name('voucher.destroy');

Route::get('corporatenews', [CorporateNewsController::class, 'index'])->name('corporatenews.index');
Route::post('corporatenews/insert', [CorporateNewsController::class, 'store'])->name('corporatenews.store');
Route::get('corporatenews/getdetails', [CorporateNewsController::class, 'GetTableDetails'])->name('corporatenews.GetTableDetails');
Route::get('corporatenews/edit/{id}', [CorporateNewsController::class, 'edit'])->name('corporatenews.edit');
Route::post('corporatenews/update', [CorporateNewsController::class, 'update'])->name('corporatenews.update');
Route::get('corporatenews/delete/{id}', [CorporateNewsController::class, 'destroy'])->name('corporatenews.destroy');

Route::get('tenantnews', [TenantNewsController::class, 'index'])->name('tenantnews.index');
Route::post('tenantnews/insert', [TenantNewsController::class, 'store'])->name('tenantnews.store');
Route::get('tenantnews/getdetails', [TenantNewsController::class, 'GetTableDetails'])->name('tenantnews.GetTableDetails');
Route::get('tenantnews/edit/{id}', [TenantNewsController::class, 'edit'])->name('tenantnews.edit');
Route::post('tenantnews/update', [TenantNewsController::class, 'update'])->name('tenantnews.update');
Route::get('tenantnews/delete/{id}', [TenantNewsController::class, 'destroy'])->name('tenantnews.destroy');

Route::get('video', [VideoController::class, 'index'])->name('video.index');
Route::post('video/insert', [VideoController::class, 'store'])->name('video.store');
Route::get('video/getdetails', [VideoController::class, 'GetTableDetails'])->name('video.GetTableDetails');
Route::get('video/edit/{id}', [VideoController::class, 'edit'])->name('video.edit');
Route::post('video/update', [VideoController::class, 'update'])->name('video.update');
Route::get('video/delete/{id}', [VideoController::class, 'destroy'])->name('video.destroy');

Route::get('social', [SocialResponsibilityController::class, 'index'])->name('social.index');
Route::post('social/insert', [SocialResponsibilityController::class, 'store'])->name('social.store');
Route::post('social/inserttwo', [SocialResponsibilityController::class, 'storetwo'])->name('social.storetwo');
Route::get('social/getdetails', [SocialResponsibilityController::class, 'GetTableDetails'])->name('social.GetTableDetails');
Route::get('social/edit/{id}', [SocialResponsibilityController::class, 'edit'])->name('social.edit');
Route::get('social/editvid/{id}', [SocialResponsibilityController::class, 'editvid'])->name('social.editvid');
Route::post('social/update', [SocialResponsibilityController::class, 'update'])->name('social.update');
Route::post('social/updatetwo', [SocialResponsibilityController::class, 'updatetwo'])->name('social.updatetwo');
Route::get('social/delete/{id}', [SocialResponsibilityController::class, 'destroy'])->name('social.destroy');

Route::get('careers', [JobOpportunityController::class, 'index'])->name('careers.index');
Route::post('careers/insert', [JobOpportunityController::class, 'store'])->name('careers.store');
Route::get('careers/getdetails', [JobOpportunityController::class, 'GetTableDetails'])->name('careers.GetTableDetails');
Route::get('careers/edit/{id}', [JobOpportunityController::class, 'edit'])->name('careers.edit');
Route::post('careers/update', [JobOpportunityController::class, 'update'])->name('careers.update');
Route::get('careers/delete/{id}', [JobOpportunityController::class, 'destroy'])->name('careers.destroy');

Route::get('candidate', [JobOpportunityController::class, 'candidate_index'])->name('candidate.candidate_index');
Route::get('candidate/getdetails', [JobOpportunityController::class, 'candidate_GetTableDetails'])->name('candidate.candidate_GetTableDetails');
Route::get('candidate/delete/{id}', [JobOpportunityController::class, 'delete'])->name('candidate.delete');

Route::get('contactus', [ContactsController::class, 'index'])->name('contactus.index');
Route::get('contactus/getdetails', [ContactsController::class, 'GetTableDetails'])->name('contactus.GetTableDetails');
Route::get('contactus/delete/{id}', [ContactsController::class, 'delete'])->name('contactus.delete');
Route::post('contactus/update', [ContactsController::class, 'update'])->name('contactus.update');
Route::get('contactus/edit/{id}', [ContactsController::class, 'edit'])->name('contactus.edit');

Route::get('events', [EventsController::class, 'index'])->name('events.index');
Route::post('events/insert', [EventsController::class, 'store'])->name('events.store');
Route::get('events/getdetails', [EventsController::class, 'GetTableDetails'])->name('events.GetTableDetails');
Route::get('events/edit/{id}', [EventsController::class, 'edit'])->name('events.edit');
Route::post('events/update', [EventsController::class, 'update'])->name('events.update');
Route::get('events/delete/{id}', [EventsController::class, 'destroy'])->name('events.destroy');

Route::get('reservations', [ReservationsController::class, 'index'])->name('reservations.index');
Route::get('reservations/getdetails', [ReservationsController::class, 'GetTableDetails'])->name('reservations.GetTableDetails');
Route::get('reservations/edit/{id}', [ReservationsController::class, 'edit'])->name('reservations.edit');
Route::post('reservations/update', [ReservationsController::class, 'update'])->name('reservations.update');
Route::get('reservations/delete/{id}', [ReservationsController::class, 'destroy'])->name('reservations.destroy');


