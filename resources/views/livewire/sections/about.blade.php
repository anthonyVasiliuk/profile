<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<section id="about" class="py-16 bg-gray-200 dark:bg-slate-800">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-12">
            <div class="flex justify-center">
                <img class="w-full max-w-md sm:w-sm rounded-lg" src="{{ Vite::asset('resources/images/me/coffee.png') }}" alt="About me">
            </div>
            <div>
                <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    {{ __('global.about_me') }}
                </h2>
                <p class="text-gray-700 dark:text-gray-300 text-lg">
                    {{ __('global.about_description') }}
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="md:order-1 order-2">
                <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
                    {{ __('global.education') }}
                </h3>
                <p class="text-gray-700 dark:text-gray-300 text-lg">
                    {{ __('global.education_description') }}
                </p>
            </div>
            <div class="flex justify-center md:order-2 order-1">
                <img class="w-full max-w-md rounded-lg " src="{{ Vite::asset('resources/images/etc/bachelor1.png') }}" alt="Education">
            </div>
        </div>
    </div>
</section>
