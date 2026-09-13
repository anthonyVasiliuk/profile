<?php

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

// Each language has its own URL so search engines can index both versions.
// A visitor who picked Russian earlier is sent from "/" to "/ru"; crawlers carry no cookies.
Route::get('/', function (Request $request) {
    if ($request->session()->get('locale', $request->cookie('locale')) === 'ru') {
        return redirect()->route('home.ru', $request->query());
    }

    App::setLocale('en');

    return view('home');
})->name('home');

Route::get('/ru', function () {
    App::setLocale('ru');

    return view('home');
})->name('home.ru');

Route::get('/sitemap.xml', function () {
    return response()
        ->view('sitemap')
        ->header('Content-Type', 'application/xml; charset=UTF-8');
})->name('sitemap');

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
    if (! in_array($locale, ['en', 'ru'], true)) {
        return redirect()->back(fallback: route('home'));
    }

    $request->session()->put('locale', $locale);

    return redirect()
        ->route($locale === 'ru' ? 'home.ru' : 'home')
        ->cookie('locale', $locale, 60 * 24 * 365 * 5);
})->middleware('throttle:12,1')->name('setLocale');
