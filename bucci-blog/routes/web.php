<?php

use App\Http\Controllers\Auth\AuthController;

use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PagesController::class, 'home'])->name('pages.home');
Route::get('/about', [PagesController::class, 'about'])->name('pages.about');
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');
Route::get('/service', [PagesController::class, 'service'])->name('pages.service');
Route::get('blog/{post:slug}', [App\Http\Controllers\BlogController::class, 'getSinglePost'])->name('getSinglePost')
    ->where('slug', '[\w\d\-\_]+');



Route::prefix('admin')->group(function (){
    Route::resource('posts', PostController::class)->only(['index','store','show','update','destroy','edit',  ]);
    Route::get('/auth/register', [AuthController::class, 'getSignUp'])->name('auth.register');
    Route::post('/auth/post/register', [AuthController::class,'postSignUp'])->name('auth.postregister');
    Route::get('/auth/login', [AuthController::class, 'getLogIN'])->name('auth.login');
    Route::post('/auth/post/login', [AuthController::class, 'postLogIn'])->name('auth.postLogIn');
    Route::get('/auth/logout', [AuthController::class, 'getLogOut'])->name('auth.logout');
    Route::get('/auth/users', [AuthController::class, 'users'])->name('auth.users');


    Route::get('password/reset',  [PasswordResetController::class, 'ShowResetForm'])->name('auth.resetform');
    Route::get('password/reset/{email}/{token}',  [PasswordResetController::class, 'changepassword'])->name('auth.resetformtoken');
    Route::post('password/email',  [PasswordResetController::class, 'resetLinkEmail'])->name('auth.reset');
    Route::post('password/reset',  [PasswordResetController::class, 'resetLinkEmail'])->name('auth.resetlink');

    //

});










