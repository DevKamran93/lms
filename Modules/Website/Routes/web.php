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

use Modules\Auth\Http\Controllers\AuthController;
use Modules\Website\Http\Controllers\WebsiteController;
use Modules\Email\Entities\EmailForwardModel;

Route::prefix('LMS')->group(function() {
    // Route::get('/', 'WebsiteController@index');
    Route::get('/', [WebsiteController::class,'index'])->name('home');
    Route::get('/about', [WebsiteController::class,'about'])->name('about');
    Route::get('/courses', [WebsiteController::class,'courses'])->name('courses');
    Route::get('/course/{id}',[WebsiteController::class,'showCourse'])->name('singleCourse');
    Route::get('/blogs', [WebsiteController::class,'blogs'])->name('blogs');
    Route::get('/blog/{id}',[WebsiteController::class,'showBlog'])->name('singleBlog');
// Route::get('/contact',[WebsiteController::class,'contact'])->name('contact');
// Route::get('/pricing',[WebsiteController::class,'pricing'])->name('pricing');
// Route::get('/events',[WebsiteController::class,'events'])->name('events');
// Route::get('/events/event/{id}',[WebsiteController::class,'eventShow'])->name('singleEvent');

// Route::get('/profile/{model}/{id}',[WebsiteController::class,'profile'])->name('singleProfile');


});
