<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<section id="experience" class="py-16 bg-gray-200 dark:bg-gray-900">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-gray-900 dark:text-white text-center mb-10">
            {{ __('global.experience') }}
        </h2>

        <div class="relative border-l-4 border-blue-500 dark:border-blue-400 pl-6">
            <!-- Последняя работа (с 3 проектами) -->
            <div class="mb-10">
                <a href="https://northitgroup.com/en/portfolio" target="_blank" class="hover:underline">
                    <h3 class="text-2xl font-bold text-blue-900 dark:text-white flex gap-2">
                        Northitgroup <livewire:socials.link-icon/>
                    </h3>
                </a>
                <p class="text-gray-600 dark:text-gray-300 text-xl">Middle+ Developer (2022 - 2025)</p>
                <p class="text-gray-400 dark:text-gray-300 text-lg">{{ __('global.experience_companies.nitg') }}</p>

                <!-- Проекты внутри компании -->
                <div class="mt-4 space-y-4">
                    <div class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow">
                        <h4 class="text-lg font-semibold text-blue-900 dark:text-blue-200"><a href="https://warehouseplus.de" target="_blank" class="hover:underline">Warehouseplus</a></h4>
                        <p class="text-gray-600 dark:text-gray-300 text-lg">
                            {{ __('global.warehouseplus') }}
                        </p>
                    </div>
                    <div class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow">
                        <h4 class="text-lg font-semibold text-blue-900 dark:text-blue-200"><a href="https://northitgroup.com/en/knowledge/101-%7B%22en%22:%22php-laravel-angular-team-north-it-group-gmbh%22,%22de%22:%22php-laravel-angular-team-north-it-group-gmbh%22%7D" target="_blank" class="hover:underline">Yupinion</a></h4>
                        <p class="text-gray-600 dark:text-gray-300 text-lg">
                            {{ __('global.yupinion') }}
                        </p>
                    </div>
                    <div class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow">
                        <h4 class="text-lg font-semibold text-blue-900 dark:text-blue-200"><a href="https://adandra.net" target="_blank" class="hover:underline">Adandra</a></h4>
                        <p class="text-gray-600 dark:text-gray-300 text-lg">
                            {{ __('global.adandra') }}
                        </p>
                    </div>
                    <div class="flex justify-center">
                        <span class="text-center text-md text-gray-500 dark:text-gray-300">{{ __('global.more') }}</span>
                    </div>
                </div>
            </div>

            <!-- Вторая компания -->
            <div class="mb-10">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white">
                    Sportdata
                </h3>
                <p class="text-gray-600 dark:text-gray-300 text-xl">Middle Developer (2020 - 2022)</p>
                <p class="text-gray-400 dark:text-gray-300 text-lg">{{ __('global.experience_companies.sportdata') }}</p>
                <div class="mt-4 p-4 bg-white dark:bg-gray-800 rounded-lg shadow">
                    <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Gambling domain</h4>
                    <p class="text-gray-600 dark:text-gray-300 text-lg">
                        {{ __('global.sportdata') }}
                    </p>
                </div>
            </div>

            <!-- Первая компания -->
            <div class="mb-10">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white">
                    Web IT
                </h3>
                <p class="text-gray-600 dark:text-gray-300 text-xl">Junior+ Developer (2016 - 2020)</p>
                <p class="text-gray-400 dark:text-gray-300 text-lg">{{ __('global.experience_companies.webit') }}</p>
                <div class="mt-4 p-4 bg-white dark:bg-gray-800 rounded-lg shadow">
                    <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Travel domain</h4>
                    <p class="text-gray-600 dark:text-gray-300 text-lg">
                        {{ __('global.webit') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
