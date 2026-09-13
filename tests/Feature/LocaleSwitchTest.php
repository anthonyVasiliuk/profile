<?php

it('stores selected locale in cookie and redirects to the localized home page', function () {
    $response = $this->get(route('setLocale', ['locale' => 'ru']));

    $response->assertRedirect(route('home.ru'));
    $response->assertCookie('locale', 'ru');
});

it('redirects back to the english home page when switching to english', function () {
    $this->get(route('setLocale', ['locale' => 'en']))->assertRedirect(route('home'));
});

it('sends a visitor who prefers russian from the root to the russian page', function () {
    $this->withCookie('locale', 'ru')->get(route('home'))->assertRedirect(route('home.ru'));
});

it('renders russian content after switching locale through the route', function () {
    $response = $this->followingRedirects()->get(route('setLocale', ['locale' => 'ru']));

    $response->assertSee('Онлайн-резюме и профиль разработчика');
});
