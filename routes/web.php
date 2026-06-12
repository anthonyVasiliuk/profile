<?php

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/cv/{locale?}', function (?string $locale = null) {
    $locale = in_array($locale, ['en', 'ru'], true) ? $locale : App::getLocale();

    App::setLocale($locale);

    $fileName = $locale === 'ru'
        ? 'Anton_Vasiliuk_CV_RU.pdf'
        : 'Anton_Vasiliuk_CV_EN.pdf';

    $pdf = Pdf::loadView('cv.document', ['locale' => $locale])
        ->setPaper('a4')
        ->setOption('defaultFont', 'DejaVu Sans');

    return $pdf->download($fileName);
})->middleware('throttle:20,1')->name('cv');

Route::get('/lang/{locale}', function (Request $request, string $locale) {
    $response = redirect()->back(fallback: route('home'));

    if (! in_array($locale, ['en', 'ru'], true)) {
        return $response;
    }

    $request->session()->put('locale', $locale);

    return $response->cookie('locale', $locale, 60 * 24 * 365 * 5);
})->middleware('throttle:12,1')->name('setLocale');
