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

// use Illuminate\Routing\Route;
use Modules\Email\Http\Controllers\EmailController;

Route::prefix('/email')->group(function() {
    // Route::get('/', 'EmailController@index');
    Route::get('/sendEmail',[EmailController::class,'store'])->name('hitEmail');
    Route::get('/verify/{id}/{userType}/{hash}', [EmailController::class,'verifyEmail'])->name('verification.verify');

});
