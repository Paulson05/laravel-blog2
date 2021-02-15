<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', [App\Http\Controllers\PagesController::class, 'home'])->name('pages.home');
 
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('pages.about');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('pages.contact');
Route::get('/service', [App\Http\Controllers\PagesController::class, 'service'])->name('pages.service');
