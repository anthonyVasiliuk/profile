<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<section id="skills" class="py-16 from-gray-200 to-blue-200 bg-gradient-to-r dark:from-gray-600 dark:to-gray-900">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-10">
            {{ __('global.skills') }}
        </h2>

        <!-- Основные навыки -->
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-8 mb-20">
            <div class="flex flex-col items-center space-y-2">
                <img class="w-32 h-32" src="{{ Vite::asset('resources/images/skills/php.png') }}" alt="PHP">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">PHP</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-32 h-32" src="{{ Vite::asset('resources/images/skills/laravel.png') }}" alt="Laravel">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">Laravel</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-32 h-32" src="{{ Vite::asset('resources/images/skills/js.png') }}" alt="JavaScript">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">JavaScript</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-32 h-32" src="{{ Vite::asset('resources/images/skills/jquery.png') }}" alt="jQuery">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">jQuery</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-32 h-32" src="{{ Vite::asset('resources/images/skills/mysql.png') }}" alt="MYSQL">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">MySQL</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-40 h-32" src="{{ Vite::asset('resources/images/skills/postgre.png') }}" alt="PostgreSQL">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">PostgreSQL</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-32 h-32" src="{{ Vite::asset('resources/images/skills/css.png') }}" alt="CSS">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">CSS</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-32 h-32" src="{{ Vite::asset('resources/images/skills/rest.png') }}" alt="RESTful">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">RESTful</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-32 h-32" src="{{ Vite::asset('resources/images/skills/html.png') }}" alt="HTML">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">HTML</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-32 h-32" src="{{ Vite::asset('resources/images/skills/react.png') }}" alt="React">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">ReactJS</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-32 h-32" src="{{ Vite::asset('resources/images/skills/git.png') }}" alt="Git">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">Git</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-32 h-32" src="{{ Vite::asset('resources/images/skills/docker.png') }}" alt="Docker">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">Docker</span>
            </div>
        </div>

        <!-- Дополнительные навыки -->
        <h3 class="text-2xl font-semibold text-gray-800 dark:text-white mb-8">
            {{ __('global.additional_skills') }}
        </h3>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-8 mb-10">
            <div class="flex flex-col items-center space-y-2">
                <img class="w-26 h-16" src="{{ Vite::asset('resources/images/skills/symfony.png') }}" alt="Symfony">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">Symfony 3</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-16 h-16" src="{{ Vite::asset('resources/images/skills/elasticsearch.png') }}" alt="Elasticsearch">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">Elasticsearch</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-24 h-16" src="{{ Vite::asset('resources/images/skills/graphql.png') }}" alt="GraphQL">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">GraphQL</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-16 h-16" src="{{ Vite::asset('resources/images/skills/livewire.png') }}" alt="Livewire">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">Livewire</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-26 h-16" src="{{ Vite::asset('resources/images/skills/kafka.png') }}" alt="Kafka">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">Apache Kafka</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-26 h-16" src="{{ Vite::asset('resources/images/skills/tailwind.png') }}" alt="Tailwind">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">Tailwind CSS</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-16 h-16" src="{{ Vite::asset('resources/images/skills/redis.png') }}" alt="Redis">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">Redis</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-16 h-16" src="{{ Vite::asset('resources/images/skills/bootstrap.png') }}" alt="Bootstrap">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">Bootstrap</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-26 h-16" src="{{ Vite::asset('resources/images/skills/wordpress.png') }}" alt="Wordpress">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">Wordpress</span>
            </div>

            <div class="flex flex-col items-center space-y-2">
                <img class="w-26 h-16" src="{{ Vite::asset('resources/images/skills/backbone.png') }}" alt="Backbone">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">BackboneJS</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-26 h-16" src="{{ Vite::asset('resources/images/skills/golang.png') }}" alt="GoLang">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">GoLang</span>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <img class="w-16 h-16" src="{{ Vite::asset('resources/images/skills/python.png') }}" alt="Python">
                <span class="text-lg font-semibold text-gray-800 dark:text-white">Python</span>
            </div>
        </div>
    </div>
</section>
