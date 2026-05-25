<?php

it('sends baseline security headers on the home page', function () {
    $this->withoutVite();

    $response = $this->get(route('home'));

    $response->assertHeader('Referrer-Policy', 'strict-origin-when-cross-origin');
    $response->assertHeader('X-Content-Type-Options', 'nosniff');
    $response->assertHeader('X-Frame-Options', 'DENY');
    $response->assertHeader('X-Permitted-Cross-Domain-Policies', 'none');
    $response->assertHeader('Cross-Origin-Opener-Policy', 'same-origin');
});
