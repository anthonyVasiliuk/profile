<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<section id="testimonials" class="py-16 bg-gray-50 dark:bg-gray-700">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-10">
            {{ __('global.testimonials') }}
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="p-6 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-lg min-h-[250px]">
                <div class="my-4 flex items-center gap-4">
                    <img src="{{ Vite::asset('resources/images/recomendations/kling.jpg') }}" class="w-12 h-12 rounded-full" alt="Person 1">
                    <div class="text-left">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white">
                            {{ __('global.person_1_name') }}
                        </h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            {{ __('global.person_1_position') }}
                        </p>
                    </div>
                </div>
                <p class="text-gray-700 dark:text-gray-300 italic">
                    "{{ __('global.testimonial_1') }}"
                </p>
            </div>

            <div class="p-6 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-lg min-h-[250px]">

                <div class="my-4 flex items-center gap-4">
                    <img src="{{ Vite::asset('resources/images/recomendations/stephan.jpg') }}" class="w-12 h-12 rounded-full" alt="Person 2">
                    <div class="text-left">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white">
                            {{ __('global.person_2_name') }}
                        </h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            {{ __('global.person_2_position') }}
                        </p>
                    </div>
                </div>
                <p class="text-gray-700 dark:text-gray-300 italic">
                    "{{ __('global.testimonial_2') }}"
                </p>
            </div>

            <div class="p-6 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-lg min-h-[250px]">
                <div class="my-4 flex items-center gap-4">
                    <img src="{{ Vite::asset('resources/images/recomendations/thomas.jpg') }}" class="w-12 h-12 rounded-full" alt="Person 3">
                    <div class="text-left">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white">
                            {{ __('global.person_3_name') }}
                        </h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            {{ __('global.person_3_position') }}
                        </p>
                    </div>
                </div>
                <p class="text-gray-700 dark:text-gray-300 italic">
                    "{{ __('global.testimonial_3') }}"
                </p>
            </div>
        </div>
    </div>
</section>
