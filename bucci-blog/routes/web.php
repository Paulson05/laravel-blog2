<?php

use Illuminate\Support\Facades\Route;





Route::get('/', [App\Http\Controllers\PagesController::class, 'home'])->name('pages.home');

Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('pages.about');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('pages.contact');
Route::get('/service', [App\Http\Controllers\PagesController::class, 'service'])->name('pages.service');

Route::get('/admin/index', [App\Http\Controllers\AdminpagesController::class, 'index'])->name('admin.index');
Route::post('/admin/post', [App\Http\Controllers\PostController::class, 'store'])->name('admin.post');
Route::get('/admin/show/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('admin.show');
Route::get('/admin/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('admin.edit');
Route::post('/admin/update/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('admin.update');






