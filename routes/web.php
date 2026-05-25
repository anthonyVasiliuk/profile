<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/lang/{locale}', function (Request $request, string $locale) {
    $response = redirect()->back(fallback: route('home'));

    if (! in_array($locale, ['en', 'ru'], true)) {
        return $response;
    }

    $request->session()->put('locale', $locale);

    return $response->cookie('locale', $locale, 60 * 24 * 365 * 5);
})->middleware('throttle:12,1')->name('setLocale');
