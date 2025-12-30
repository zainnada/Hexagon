<?php

use App\Http\Controllers\ContactController;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('about', function () {
    return view('about');
});
Route::get('faq', function () {
    return view('faq');
});
Route::get('services', function () {
    return view('services', [
        'services' => Service::all()
    ]);
});
Route::get('service/{id}', function ($id) {
    return view('service', [
        'service' => Service::find($id)
    ]);
});
Route::get('contact', function () {
    return view('contact');
});
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'en'])) {
        session(['locale' => $locale]);
    }
    return back();
})->name('lang.switch');
