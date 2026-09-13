<?php

it('serves a sitemap with both localized home pages', function () {
    $response = $this->get('/sitemap.xml');

    $response->assertOk();
    $response->assertHeader('Content-Type', 'application/xml; charset=UTF-8');
    $response->assertSee('<loc>'.route('home').'</loc>', false);
    $response->assertSee('<loc>'.route('home.ru').'</loc>', false);
    $response->assertSee('hreflang="x-default"', false);
});

it('renders the english home page with seo metadata', function () {
    $this->withoutVite();

    $response = $this->get(route('home'));

    $response->assertOk();
    $response->assertSee('<html lang="en"', false);
    $response->assertSee('<link rel="alternate" hreflang="ru" href="'.route('home.ru').'" />', false);
    $response->assertSee('<meta property="og:image" content="'.asset('images/og-en.jpg').'" />', false);
    $response->assertSee('<meta property="og:locale" content="en_US" />', false);
    $response->assertSee('"@type":"ProfilePage"', false);
    $response->assertSee('"sameAs":["https://www.linkedin.com/in/', false);
});

it('renders the russian home page on its own url', function () {
    $this->withoutVite();

    $response = $this->get(route('home.ru'));

    $response->assertOk();
    $response->assertSee('<html lang="ru"', false);
    $response->assertSee('Онлайн-резюме и профиль разработчика');
    $response->assertSee('<link rel="canonical" href="'.route('home.ru').'" />', false);
    $response->assertSee('<meta property="og:image" content="'.asset('images/og-ru.jpg').'" />', false);
});

it('ships an og image for every locale', function (string $locale) {
    expect(public_path("images/og-{$locale}.jpg"))->toBeFile();
})->with(['en', 'ru']);
