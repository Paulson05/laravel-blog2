<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\PagesController::class, 'home'])->name('pages.home');
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('pages.about');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('pages.contact');
Route::get('/service', [App\Http\Controllers\PagesController::class, 'service'])->name('pages.service');
Route::get('blog/{post:slug}', [App\Http\Controllers\BlogController::class, 'getSinglePost'])->name('getSinglePost')
    ->where('slug', '[\w\d\-\_]+');


Route::prefix('admin')->group(function (){
    Route::resource('posts', PostController::class)->only(['index','store','show','update','destroy','edit', ]);



});

Route::get('/auth/register', [AuthController::class, 'getSignUp'])->name('auth.register');
Route::post('/auth/post/register', [AuthController::class,'postSignUp'])->name('auth.postregister');
    // Route::get('/auth/signup', [App\Http\Controllers\Auth\AuthenticationController::class, 'getLogIN'])->name('auth.login');
    // Route::post('/auth/post/getsignup', [App\Http\Controllers\Auth\AuthenticationController::class, 'postLogIn'])->name('auth.postLogIn');
    // Route::get('/auth/logout', [App\Http\Controllers\Auth\AuthenticationController::class, 'getLogOut'])->name('auth.logout');







