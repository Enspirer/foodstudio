<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\JobGroupController;
use App\Http\Controllers\Backend\TeamController;

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
// Route::get('team/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
Route::get('team/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');

Route::post('team/update', [TeamController::class, 'update_team'])->name('team.update_team');
Route::get('team/delete/{id}', [TeamController::class, 'destroy'])->name('team.destroy');
