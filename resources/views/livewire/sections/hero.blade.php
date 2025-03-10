<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<section class="h-screen flex items-center justify-center from-blue-300 to-gray-200 bg-gradient-to-r text-white">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div class="text-center md:text-left px-6">
            <h1 class="text-5xl font-bold">
                {{ __('global.hello') }}, {{ __('global.iam') }} {{ config('app.my_name') }}
            </h1>
            <p class="mt-4 text-xl">
                Fullstack\Backend PHP Developer | Laravel | JavaScript | 7+ years experience
            </p>
            <a href="#about"
               class="mt-6 inline-block bg-white font-medium text-base text-blue-500 px-6 py-3 rounded-lg shadow-md hover:bg-blue-100 transition transform hover:-translate-y-0.5 focus:outline-none focus:ring-opacity-50 focus:ring focus:ring-blue-600 focus:ring-offset-2">
                {{ __('global.learn_more') }}
            </a>
        </div>

        <div class="flex justify-center">
            <img class="w-full max-w-4xl" src="{{ Vite::asset('resources/images/me/horse.png') }}" alt="me"/>
        </div>
    </div>

</section>
