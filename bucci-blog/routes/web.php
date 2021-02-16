<?php

use Illuminate\Support\Facades\Route;





Route::get('/', [App\Http\Controllers\PagesController::class, 'home'])->name('pages.home');

Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('pages.about');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('pages.contact');
Route::get('/service', [App\Http\Controllers\PagesController::class, 'service'])->name('pages.service');

Route::get('/admin/index', [App\Http\Controllers\adminController::class, 'index'])->name('admin.index');



