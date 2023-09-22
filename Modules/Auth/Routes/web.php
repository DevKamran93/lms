<?php

// use Modules\Auth\Http\Controllers\AuthController;
use Modules\Auth\Http\Controllers\AuthController;

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

Route::prefix('auth')->group(function() {
    // Route::get('/', 'AuthController@index');
    // Registration Routes
    Route::get('/register',[AuthController::class,'index'])->name('register');
    Route::post('/register',[AuthController::class,'store'])->name('registerAttempt');
    // Login Routes
    Route::get('/login',[AuthController::class,'loginForm'])->name('login');
    Route::post('/login',[AuthController::class,'loginAttempt'])->name('loginAttempt');
    // Google Login
    Route::get('/google',[AuthController::class,'redirectToGoogle'])->name('redirectToGoogle');
    Route::get('/google/callback',[AuthController::class,'handleGoogleCallBack'])->name('handleGoogleCallBack');
    // Facebook Login
    Route::get('facebook', [AuthController::class,'redirectToFacebook'])->name('redirectToFacebook');
    Route::get('/facebook/callback',[AuthController::class,'handleFacebookCallBack'])->name('handleFacebookCallBack');
    // Password Reset Routes
    Route::get('/password-reset',[AuthController::class,'forgotPasswordForm'])->name('forgotPassword');
    Route::post('/password-reset',[AuthController::class,'forgotPasswordAttempt'])->name('forgotPasswordAttempt');
    // Logout Route
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
});

