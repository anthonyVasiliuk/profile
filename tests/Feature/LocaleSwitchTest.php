<?php

it('stores selected locale in cookie and redirects home without referer', function () {
    $response = $this->get(route('setLocale', ['locale' => 'ru']));

    $response->assertRedirect(route('home'));
    $response->assertCookie('locale', 'ru');
});

it('renders russian content after switching locale through the route', function () {
    $response = $this->followingRedirects()->get(route('setLocale', ['locale' => 'ru']));

    $response->assertSee('Онлайн-резюме и профиль разработчика');
});
