<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/lang/{locale}', function ($locale, \Illuminate\Http\Request $request) {
    if (in_array($locale, ['en', 'ru'])) {
//        dd($locale);
        \Illuminate\Support\Facades\Cookie::queue('locale', $locale, 60 * 24 * 30, false); // Сохраняем язык на 30 дней
    }
    return redirect()->back();
})->name('setLocale');
