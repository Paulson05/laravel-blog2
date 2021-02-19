<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\PagesController::class, 'home'])->name('pages.home');
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('pages.about');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('pages.contact');
Route::get('/service', [App\Http\Controllers\PagesController::class, 'service'])->name('pages.service');
Route::get('blog/{post:slug}', [App\Http\Controllers\BlogController::class, 'getSinglePost'])->name('getSinglePost')
    ->where('slug', '[\w\d\-\_]+');
Route::prefix('admin')->group(function (){
    Route::resource('posts',\App\Http\Controllers\PostController::class)->only(['index','store','show','update','destroy','edit']);


});







