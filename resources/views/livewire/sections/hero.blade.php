<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<section class="h-screen flex items-center justify-center from-blue-300 to-gray-200 dark:from-slate-700 dark:to-gray-500 bg-gradient-to-r text-white ">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center mt-30 ">
        <div class="text-center md:text-left px-6">
            <h1 class="text-5xl font-bold">
                {{ __('global.hello') }}, {{ __('global.iam') }} {{ __('global.my_name') }}
            </h1>
            <p class="mt-4 text-xl">
                {{ __('global.position') }}  {{ __('global.position_experience') }}
            </p>
            <a href="#about"
               class="mt-6 inline-block bg-white font-medium text-base text-blue-500 px-6 py-3 rounded-lg shadow-md
               hover:bg-blue-100 transition transform hover:-translate-y-0.5 focus:outline-none  focus:ring focus:ring-blue-600 focus:ring-offset-2
                dark:bg-slate-300 dark:text-stone-500 dark:hover:text-stone-800 dark:hover:bg-zinc-500 focus:ring-stone-900">
                {{ __('global.learn_more') }}
            </a>
        </div>

        <div class="flex justify-center">
            <img class="hidden md:block md:max-w-lg lg:max-w-2xl rounded-lg " src="{{ Vite::asset('resources/images/me/horse.png') }}" alt="me"/>
        </div>
    </div>

</section>
