<?php

it('rate limits repeated locale switching requests', function () {
    foreach (range(1, 12) as $attempt) {
        $this->get(route('setLocale', ['locale' => 'ru']))->assertRedirect();
    }

    $this->get(route('setLocale', ['locale' => 'ru']))->assertStatus(429);
});
