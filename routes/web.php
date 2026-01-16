<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('lang/{locale}', function ($locale) {
    session(['locale' => $locale]);
    return back();
})->name('lang.switch');

Route::view('/','home');
Route::view('/about','about');
Route::view('/faq','faq');

Route::view('contact','contact');
Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');

Route::get('/services', [ServiceController::class,'index'])
    ->middleware('auth');
Route::get('/services/create', [ServiceController::class,'create'])
    ->middleware('auth');
Route::post('/services', [ServiceController::class,'store'])
    ->middleware('auth');
Route::get('/services/{service}', [ServiceController::class,'show'])
    ->middleware('auth');
Route::get('/services/{service}/edit', [ServiceController::class,'edit'])
    ->middleware('auth')
    ->can('edit','service');
Route::patch('/services/{service}', [ServiceController::class,'update'])
    ->middleware('auth');
Route::delete('/services/{service}', [ServiceController::class,'destroy'])
    ->middleware('auth');

Route::get('register', [RegisterController::class,'create'])
    ->name('register')
    ->middleware('guest');
Route::post('register', [RegisterController::class,'store']);

Route::get('login', [SessionController::class,'create'])
    ->name('login')
    ->middleware('guest');
Route::post('login', [SessionController::class,'store']);
Route::post('logout', [SessionController::class,'destroy']);
