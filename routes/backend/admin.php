<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\JobGroupController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\BranchController;
use App\Http\Controllers\Backend\TenantController;

use App\Http\Controllers\Backend\FeatureEventsController;
use App\Http\Controllers\Backend\PromotionsController;
use App\Http\Controllers\Backend\VouchersController;

use App\Http\Controllers\Backend\CorporateNewsController;
use App\Http\Controllers\Backend\TenantNewsController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

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


