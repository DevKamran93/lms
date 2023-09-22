<?php

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

use Modules\AdminProfessor\Http\Controllers\AdminProfessorController;

Route::prefix('dashboard/admin')->group(function() {
    Route::get('/', [AdminProfessorController::class,'index'])->name('adminDashboard');
});
