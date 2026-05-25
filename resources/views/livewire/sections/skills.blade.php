<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

@php
    $skillImageMeta = [
        'php.png' => ['width' => 960, 'height' => 960],
        'laravel.png' => ['width' => 920, 'height' => 952],
        'js.png' => ['width' => 97, 'height' => 100],
        'jquery.png' => ['width' => 360, 'height' => 360],
        'mysql.png' => ['width' => 103, 'height' => 100],
        'postgre.png' => ['width' => 900, 'height' => 600],
        'css.png' => ['width' => 85, 'height' => 100],
        'rest.png' => ['width' => 300, 'height' => 300],
        'html.png' => ['width' => 85, 'height' => 100],
        'react.png' => ['width' => 106, 'height' => 100],
        'git.png' => ['width' => 97, 'height' => 100],
        'docker.png' => ['width' => 920, 'height' => 920],
        'symfony.png' => ['width' => 900, 'height' => 520],
        'elasticsearch.png' => ['width' => 348, 'height' => 345],
        'graphql.png' => ['width' => 268, 'height' => 188],
        'livewire.png' => ['width' => 400, 'height' => 400],
        'kafka.png' => ['width' => 900, 'height' => 512],
        'tailwind.png' => ['width' => 920, 'height' => 552],
        'redis.png' => ['width' => 920, 'height' => 920],
        'bootstrap.png' => ['width' => 97, 'height' => 100],
        'wordpress.png' => ['width' => 900, 'height' => 512],
        'backbone.png' => ['width' => 900, 'height' => 606],
        'golang.png' => ['width' => 360, 'height' => 180],
        'python.png' => ['width' => 900, 'height' => 900],
    ];

    $primarySkills = [
        ['name' => 'PHP', 'image' => 'php.png'],
        ['name' => 'Laravel', 'image' => 'laravel.png'],
        ['name' => 'JavaScript', 'image' => 'js.png'],
        ['name' => 'jQuery', 'image' => 'jquery.png'],
        ['name' => 'MySQL', 'image' => 'mysql.png'],
        ['name' => 'PostgreSQL', 'image' => 'postgre.png'],
        ['name' => 'CSS', 'image' => 'css.png'],
        ['name' => 'RESTful APIs', 'image' => 'rest.png'],
        ['name' => 'HTML', 'image' => 'html.png'],
        ['name' => 'React', 'image' => 'react.png'],
        ['name' => 'Git', 'image' => 'git.png'],
        ['name' => 'Docker', 'image' => 'docker.png'],
    ];

    $additionalSkills = [
        ['name' => 'Symfony 3', 'image' => 'symfony.png'],
        ['name' => 'Elasticsearch', 'image' => 'elasticsearch.png'],
        ['name' => 'GraphQL', 'image' => 'graphql.png'],
        ['name' => 'Livewire', 'image' => 'livewire.png'],
        ['name' => 'Apache Kafka', 'image' => 'kafka.png'],
        ['name' => 'Tailwind CSS', 'image' => 'tailwind.png'],
        ['name' => 'Redis', 'image' => 'redis.png'],
        ['name' => 'Bootstrap', 'image' => 'bootstrap.png'],
        ['name' => 'WordPress', 'image' => 'wordpress.png'],
        ['name' => 'Backbone.js', 'image' => 'backbone.png'],
        ['name' => 'Go', 'image' => 'golang.png'],
        ['name' => 'Python', 'image' => 'python.png'],
    ];
@endphp

@php
    $isRu = app()->getLocale() === 'ru';
    $skillsUi = [
        'backend' => $isRu ? 'Backend' : 'Backend',
        'backend_text' => $isRu ? 'API-дизайн, интеграции, бизнес-логика, базы данных и backend-процессы продукта.' : 'API design, integrations, business logic, databases, product backend workflows.',
        'adjacent' => $isRu ? 'Смежное' : 'Adjacent',
        'adjacent_text' => $isRu ? 'Frontend delivery, search, очереди, infra touchpoints и отладка production-систем.' : 'Frontend delivery, search, queues, infra touchpoints, and debugging production systems.',
        'core_matrix' => $isRu ? 'Матрица основного стека' : 'Core Stack Matrix',
        'ready' => $isRu ? 'в работе' : 'ready',
    ];
@endphp

<section id="skills" class="cyber-section cyber-section-skills relative overflow-hidden bg-[var(--page-bg)] py-24 text-[var(--heading)] lg:py-28">
    <div class="absolute inset-0 -z-10" style="background-image: var(--skills-bg);"></div>
    <div class="mx-auto max-w-7xl px-6">
        <div class="grid gap-8 lg:grid-cols-[0.86fr_1.14fr] lg:items-stretch">
            <div class="cyber-dossier flex h-full flex-col rounded-[1.9rem] p-8 sm:p-10">
                <div class="flex items-center justify-between gap-4">
                    <p class="theme-kicker">{{ __('global.skills') }}</p>
                    <p class="cyber-log text-[11px]">scan://core-stack</p>
                </div>
                <h2 class="theme-display theme-title mt-5 text-3xl font-semibold tracking-tight sm:text-[2.85rem]">
                    {{ __('global.skills_heading') }}
                </h2>
                <p class="theme-lead mt-6 max-w-[54ch]">
                    {{ __('global.skills_intro') }}
                </p>
                <div class="cyber-divider mt-8"></div>
                <div class="mt-6 space-y-4">
                    <div class="cyber-stat rounded-[1rem] p-4">
                        <p class="cyber-panel-title">{{ $skillsUi['backend'] }}</p>
                        <p class="theme-copy mt-2 text-sm leading-6">{{ $skillsUi['backend_text'] }}</p>
                    </div>
                    <div class="cyber-stat rounded-[1rem] p-4">
                        <p class="cyber-panel-title">{{ $skillsUi['adjacent'] }}</p>
                        <p class="theme-copy mt-2 text-sm leading-6">{{ $skillsUi['adjacent_text'] }}</p>
                    </div>
                </div>
            </div>

            <div class="grid h-full auto-rows-fr gap-8">
                <div class="flex h-full flex-col rounded-[1.9rem] border p-6 sm:p-7" style="border-color: rgba(9, 230, 255, 0.16); background: linear-gradient(180deg, rgba(12, 24, 44, 0.78) 0%, rgba(9, 18, 33, 0.82) 100%);">
                    <div class="mb-5 flex items-center justify-between gap-4">
                        <p class="cyber-panel-title">{{ $skillsUi['core_matrix'] }}</p>
                        <p class="cyber-log text-[11px]">status://active</p>
                    </div>
                    <div class="grid gap-4 sm:grid-cols-2 2xl:grid-cols-3">
                        @foreach ($primarySkills as $skill)
                            <div class="theme-card theme-card-interactive cyber-skill-card rounded-[1.25rem] p-4 sm:min-h-[5.75rem]">
                                <div class="flex items-center gap-4">
                                    <div class="cyber-skill-icon flex h-14 w-14 shrink-0 items-center justify-center rounded-[1rem] p-2">
                                        <img class="cyber-skill-image max-h-9 w-auto object-contain" src="{{ Vite::asset('resources/images/skills/'.$skill['image']) }}" alt="{{ $skill['name'] }}" loading="lazy" decoding="async" width="{{ $skillImageMeta[$skill['image']]['width'] }}" height="{{ $skillImageMeta[$skill['image']]['height'] }}">
                                    </div>
                                    <div class="min-w-0">
                                        <p class="theme-title text-base font-semibold leading-5">{{ $skill['name'] }}</p>
                                        <p class="theme-meta mt-1 text-xs uppercase tracking-[0.14em]">{{ $skillsUi['ready'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="flex h-full flex-col rounded-[1.9rem] border p-6 sm:p-7" style="border-color: rgba(126, 87, 255, 0.18); background: linear-gradient(180deg, rgba(12, 23, 42, 0.76) 0%, rgba(8, 17, 31, 0.8) 100%);">
                    <div class="mb-5 flex items-center justify-between gap-4">
                        <h3 class="theme-display theme-title text-2xl font-semibold">
                            {{ __('global.additional_skills') }}
                        </h3>
                        <p class="cyber-log text-[11px]">modules://adjacent</p>
                    </div>
                    <div class="grid gap-3 sm:grid-cols-2">
                        @foreach ($additionalSkills as $skill)
                            <div class="theme-card-muted theme-card-interactive inline-flex min-h-[3.75rem] items-center gap-3 rounded-[0.9rem] px-4 py-3 text-sm">
                                <div class="cyber-skill-icon cyber-skill-icon-soft flex h-10 w-10 shrink-0 items-center justify-center rounded-[0.8rem] p-2">
                                    <img class="cyber-skill-image max-h-6 w-auto object-contain" src="{{ Vite::asset('resources/images/skills/'.$skill['image']) }}" alt="{{ $skill['name'] }}" loading="lazy" decoding="async" width="{{ $skillImageMeta[$skill['image']]['width'] }}" height="{{ $skillImageMeta[$skill['image']]['height'] }}">
                                </div>
                                <span class="min-w-0 theme-copy">{{ $skill['name'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
