<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\JobGroupController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('jobgroup', [JobGroupController::class, 'index'])->name('jobgroup.index');
Route::post('jobgroup/insert', [JobGroupController::class, 'add_job_group'])->name('jobgroup.add_job_group');
Route::get('jobgroup/getdetails', [JobGroupController::class, 'GetTableDetails'])->name('jobgroup.GetTableDetails');
