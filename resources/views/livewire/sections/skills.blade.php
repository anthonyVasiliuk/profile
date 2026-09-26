<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

@php
    // 'scale' zooms logos whose files carry wide transparent margins, so every icon fills its tile evenly.
    $skillImageMeta = [
        'php.png' => ['width' => 192, 'height' => 192],
        'laravel.png' => ['width' => 186, 'height' => 192],
        'js.png' => ['width' => 97, 'height' => 100],
        'jquery.png' => ['width' => 192, 'height' => 192],
        'mysql.png' => ['width' => 103, 'height' => 100],
        'postgre.png' => ['width' => 192, 'height' => 128, 'scale' => 1.8],
        'css.png' => ['width' => 85, 'height' => 100],
        'rest.png' => ['width' => 300, 'height' => 300],
        'html.png' => ['width' => 85, 'height' => 100],
        'react.png' => ['width' => 106, 'height' => 100],
        'git.png' => ['width' => 97, 'height' => 100],
        'docker.png' => ['width' => 192, 'height' => 192],
        'symfony.png' => ['width' => 192, 'height' => 111, 'scale' => 1.7],
        'elasticsearch.png' => ['width' => 192, 'height' => 190],
        'graphql.png' => ['width' => 192, 'height' => 135, 'scale' => 1.6],
        'livewire.png' => ['width' => 192, 'height' => 192],
        'kafka.png' => ['width' => 192, 'height' => 109, 'scale' => 1.7],
        'tailwind.png' => ['width' => 192, 'height' => 115],
        'redis.png' => ['width' => 192, 'height' => 192],
        'bootstrap.png' => ['width' => 97, 'height' => 100],
        'wordpress.png' => ['width' => 192, 'height' => 109, 'scale' => 1.85],
        'backbone.png' => ['width' => 192, 'height' => 129, 'scale' => 1.85],
        'golang.png' => ['width' => 192, 'height' => 96],
        'python.png' => ['width' => 192, 'height' => 192, 'scale' => 1.4],
        'typescript.svg' => ['width' => 128, 'height' => 128],
        'filament.svg' => ['width' => 128, 'height' => 128],
    ];

    $primarySkills = [
        ['name' => 'PHP', 'image' => 'php.png'],
        ['name' => 'Laravel', 'image' => 'laravel.png'],
        ['name' => 'Filament', 'image' => 'filament.svg'],
        ['name' => 'TypeScript', 'image' => 'typescript.svg'],
        ['name' => 'JavaScript', 'image' => 'js.png'],
        ['name' => 'React', 'image' => 'react.png'],
        ['name' => 'MySQL', 'image' => 'mysql.png'],
        ['name' => 'PostgreSQL', 'image' => 'postgre.png'],
        ['name' => 'RESTful APIs', 'image' => 'rest.png'],
        ['name' => 'Redis', 'image' => 'redis.png'],
        ['name' => 'Git', 'image' => 'git.png'],
        ['name' => 'Docker', 'image' => 'docker.png'],
    ];

    $additionalSkills = [
        ['name' => 'Go', 'image' => 'golang.png'],
        ['name' => 'Python', 'image' => 'python.png'],
        ['name' => 'Livewire', 'image' => 'livewire.png'],
        ['name' => 'Tailwind CSS', 'image' => 'tailwind.png'],
        ['name' => 'GraphQL', 'image' => 'graphql.png'],
        ['name' => 'Apache Kafka', 'image' => 'kafka.png'],
        ['name' => 'Elasticsearch', 'image' => 'elasticsearch.png'],
        ['name' => 'Symfony', 'image' => 'symfony.png'],
        ['name' => 'HTML', 'image' => 'html.png'],
        ['name' => 'CSS', 'image' => 'css.png'],
        ['name' => 'jQuery', 'image' => 'jquery.png'],
        ['name' => 'Bootstrap', 'image' => 'bootstrap.png'],
        ['name' => 'Backbone.js', 'image' => 'backbone.png'],
        ['name' => 'WordPress', 'image' => 'wordpress.png'],
    ];
@endphp

@php
    $isRu = app()->getLocale() === 'ru';
    $skillsUi = [
        'backend' => $isRu ? 'Backend' : 'Backend',
        'backend_text' => $isRu ? 'API-дизайн, интеграции, бизнес-логика, базы данных и backend-процессы продукта.' : 'API design, integrations, business logic, databases, product backend workflows.',
        'adjacent' => $isRu ? 'Смежное' : 'Adjacent',
        'adjacent_text' => $isRu ? 'Frontend-задачи, поиск, очереди, инфраструктурные узлы и отладка production-систем.' : 'Frontend work, search, queues, infrastructure touchpoints, and debugging production systems.',
        'core_matrix' => $isRu ? 'Матрица основного стека' : 'Core Stack Matrix',
    ];
@endphp

<section id="skills" class="cyber-section cyber-section-skills relative overflow-hidden bg-[var(--page-bg)] py-16 text-[var(--heading)] sm:py-24 lg:py-28">
    <div class="absolute inset-0 -z-10" style="background-image: var(--skills-bg);"></div>
    <div class="mx-auto max-w-7xl px-4 sm:px-6">
        <div class="grid gap-10 sm:gap-8 lg:grid-cols-[0.86fr_1.14fr] lg:items-stretch">
            <div class="cyber-dossier mobile-flat flex flex-col rounded-[1.9rem] p-8 sm:p-10 lg:self-start">
                <div class="flex items-center justify-between gap-4">
                    <p class="theme-kicker">{{ __('global.skills') }}</p>
                    <p class="cyber-log hidden text-[11px] sm:block">scan://core-stack</p>
                </div>
                <h2 class="theme-display theme-title mt-5 text-3xl font-semibold tracking-tight sm:text-[2.85rem]">
                    {{ __('global.skills_heading') }}
                </h2>
                <p class="theme-lead mt-6 max-w-[54ch]">
                    {{ __('global.skills_intro') }}
                </p>
                <div class="cyber-divider mt-8"></div>
                <div class="mt-6 space-y-4">
                    <div class="cyber-stat mobile-soft rounded-[1rem] p-4">
                        <p class="cyber-panel-title">{{ $skillsUi['backend'] }}</p>
                        <p class="theme-copy mt-2 text-sm leading-6">{{ $skillsUi['backend_text'] }}</p>
                    </div>
                    <div class="cyber-stat mobile-soft rounded-[1rem] p-4">
                        <p class="cyber-panel-title">{{ $skillsUi['adjacent'] }}</p>
                        <p class="theme-copy mt-2 text-sm leading-6">{{ $skillsUi['adjacent_text'] }}</p>
                    </div>
                </div>
            </div>

            <div class="grid h-full gap-10 sm:auto-rows-fr sm:gap-8">
                <div class="cyber-matrix-panel mobile-flat flex h-full flex-col rounded-[1.9rem] p-6 sm:p-7">
                    <div class="mb-5 flex items-center justify-between gap-4">
                        <p class="cyber-panel-title">{{ $skillsUi['core_matrix'] }}</p>
                        <p class="cyber-log hidden text-[11px] sm:block">status://active</p>
                    </div>
                    <div class="grid grid-cols-2 gap-3 sm:gap-4 2xl:grid-cols-3">
                        @foreach ($primarySkills as $skill)
                            <div class="theme-card theme-card-interactive cyber-skill-card rounded-[1rem] p-2.5 sm:min-h-[5.75rem] sm:rounded-[1.25rem] sm:p-4">
                                <div class="flex items-center gap-2 sm:gap-4">
                                    <div class="cyber-skill-icon flex h-11 w-11 shrink-0 items-center justify-center rounded-[0.8rem] p-1.5 sm:h-14 sm:w-14 sm:rounded-[1rem] sm:p-2">
                                        <img class="cyber-skill-image" @isset($skillImageMeta[$skill['image']]['scale']) style="transform: scale({{ $skillImageMeta[$skill['image']]['scale'] }})" @endisset src="{{ Vite::asset('resources/images/skills/'.$skill['image']) }}" alt="{{ $skill['name'] }}" loading="lazy" decoding="async" width="{{ $skillImageMeta[$skill['image']]['width'] }}" height="{{ $skillImageMeta[$skill['image']]['height'] }}">
                                    </div>
                                    <div class="min-w-0">
                                        <p class="theme-title text-sm font-semibold leading-5 sm:text-base">{{ $skill['name'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="cyber-matrix-panel cyber-matrix-panel-violet mobile-flat flex h-full flex-col rounded-[1.9rem] p-6 sm:p-7">
                    <div class="mb-5 flex items-center justify-between gap-4">
                        <h3 class="theme-display theme-title text-2xl font-semibold">
                            {{ __('global.additional_skills') }}
                        </h3>
                        <p class="cyber-log hidden text-[11px] sm:block">modules://adjacent</p>
                    </div>
                    <div class="grid grid-cols-2 gap-3 2xl:grid-cols-3">
                        @foreach ($additionalSkills as $skill)
                            <div class="theme-card theme-card-interactive cyber-skill-card flex min-h-[3.9rem] items-center gap-2 rounded-[1rem] p-2.5 sm:gap-3 sm:p-3">
                                <div class="cyber-skill-icon flex h-11 w-11 shrink-0 items-center justify-center rounded-[0.8rem] p-1.5 sm:h-12 sm:w-12 sm:rounded-[0.85rem]">
                                    <img class="cyber-skill-image" @isset($skillImageMeta[$skill['image']]['scale']) style="transform: scale({{ $skillImageMeta[$skill['image']]['scale'] }})" @endisset src="{{ Vite::asset('resources/images/skills/'.$skill['image']) }}" alt="{{ $skill['name'] }}" loading="lazy" decoding="async" width="{{ $skillImageMeta[$skill['image']]['width'] }}" height="{{ $skillImageMeta[$skill['image']]['height'] }}">
                                </div>
                                <span class="min-w-0 theme-title text-sm font-semibold leading-5">{{ $skill['name'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
