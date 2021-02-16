<?php

use Illuminate\Support\Facades\Route;





Route::get('/', [App\Http\Controllers\PagesController::class, 'home'])->name('pages.home');

Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('pages.about');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('pages.contact');
Route::get('/service', [App\Http\Controllers\PagesController::class, 'service'])->name('pages.service');

Route::get('/admin/index', [App\Http\Controllers\AdminpagesController::class, 'index'])->name('admin.index');
Route::get('/admin/post/headerpost', [App\Http\Controllers\AdminpagesController::class, 'headerpost'])->name('admin.headerpost');
Route::get('/admin/post/mainpost', [App\Http\Controllers\AdminpagesController::class, 'mainpost'])->name('admin.mainpost');
Route::get('/admin/post/sidepost', [App\Http\Controllers\AdminpagesController::class, 'sidepost'])->name('admin.sidepost');




