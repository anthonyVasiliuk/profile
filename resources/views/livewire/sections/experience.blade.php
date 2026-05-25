<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

@php
    $isRu = app()->getLocale() === 'ru';
    $experienceUi = [
        'teams_online' => $isRu ? '> teams_online = 4' : '> teams_online = 4',
        'domains' => $isRu ? '> domains = proxies, gambling, travel, ecommerce, research, social' : '> domains = proxies, gambling, travel, ecommerce, research, social',
        'northit_track' => $isRu ? 'мультипроектный delivery' : 'multi-project delivery',
        'sportdata_track' => $isRu ? 'беттинг + казино' : 'betting + casino',
        'webit_track' => $isRu ? 'travel-платформы' : 'travel platforms',
        'proxy_period' => $isRu ? '2025 - сейчас' : '2025 - now',
    ];

    $proxyma = [
        'company' => 'Proxyma / Prosox',
        'role' => $isRu
            ? 'Senior Backend Developer (2025 - настоящее время)'
            : 'Senior Backend Developer (2025 - Present)',
        'summary' => $isRu
            ? 'Продуктовая backend-роль с фокусом на поддержку legacy-платформы продажи прокси и постепенный перевод ключевой логики на новый движок без остановки рабочего продукта.'
            : 'Product backend role focused on keeping a legacy proxy-sales platform stable while migrating its core logic to a new engine without disrupting the live product.',
        'track_label' => $isRu ? 'product backend + legacy rewrite' : 'product backend + legacy rewrite',
        'case_title' => $isRu ? 'Ключевые результаты' : 'Key outcomes',
        'log' => 'product://proxyma-prosox',
        'cards' => [
            [
                'title' => $isRu ? 'Новый движок за 3 месяца' : 'New Engine in 3 Months',
                'text' => $isRu
                    ? 'Переписал основной backend-движок за 3 месяца, параллельно поддерживая legacy-ветку, что ускорило выпуск новых изменений примерно на 40% и убрало ключевые архитектурные ограничения старой системы.'
                    : 'Rebuilt the core backend engine in 3 months while supporting the live legacy branch, which improved delivery speed by roughly 40% and removed several hard limits from the older architecture.',
            ],
            [
                'title' => $isRu ? 'Провайдеры и платежи' : 'Providers and Payments',
                'text' => $isRu
                    ? 'Подключил 8+ провайдеров прокси и 3 платёжные системы, унифицировал адаптеры, ретраи, синхронизацию остатков и provisioning-флоу, сократив время интеграции новых провайдеров примерно на 60%.'
                    : 'Integrated 8+ proxy providers and 3 payment systems, standardized adapters, retries, stock sync, and provisioning flows, reducing new-provider rollout time by about 60%.',
            ],
            [
                'title' => $isRu ? 'API performance' : 'API Performance',
                'text' => $isRu
                    ? 'Оптимизировал тяжёлые API-эндпоинты, запросы к БД, кеширование и фоновые процессы, снизив среднее время ответа примерно на 35% и уменьшив количество peak-load ошибок примерно на 30%.'
                    : 'Optimized heavy API endpoints, database queries, caching, and background flows, cutting average response time by about 35% and reducing peak-load errors by roughly 30%.',
            ],
        ],
    ];
@endphp

<section id="experience" class="cyber-section cyber-section-experience bg-[var(--page-bg-alt)] py-24 lg:py-28">
    <div class="mx-auto max-w-7xl px-6">
        <div class="flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">
            <div class="max-w-3xl">
                <p class="theme-kicker">{{ __('global.experience') }}</p>
                <h2 class="theme-display theme-title mt-4 text-3xl font-semibold tracking-tight sm:text-[2.85rem]">
                    {{ __('global.experience_heading') }}
                </h2>
            </div>
            <div class="cyber-terminal max-w-xl rounded-[1rem] p-4">
                <p class="cyber-log text-xs sm:text-sm">{{ $experienceUi['teams_online'] }}</p>
                <p class="cyber-log mt-2 text-xs sm:text-sm">{{ $experienceUi['domains'] }}</p>
            </div>
        </div>

        <div class="cyber-timeline relative mt-12 space-y-8">

            <article class="cyber-dossier cyber-timeline-card relative rounded-[1.9rem] p-8 sm:p-10">
                <div class="flex flex-col gap-4 lg:flex-row lg:items-start lg:justify-between">
                    <div>
                        <a href="https://proxyma.io" target="_blank" rel="noopener noreferrer" class="theme-display theme-link-strong group inline-flex items-center gap-2 text-2xl font-semibold">
                            <span>{{ $proxyma['company'] }}</span>
                            <livewire:socials.link-icon />
                        </a>
                        <p class="theme-copy mt-2 text-lg font-medium">{{ $proxyma['role'] }}</p>
                    </div>
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="cyber-pill-muted inline-flex items-center rounded-[0.8rem] px-3 py-2 text-xs font-medium uppercase tracking-[0.16em]">
                            {{ $experienceUi['proxy_period'] }}
                        </span>
                        <span class="cyber-pill-muted inline-flex items-center rounded-[0.8rem] px-3 py-2 text-xs font-medium uppercase tracking-[0.16em]">
                            {{ $proxyma['track_label'] }}
                        </span>
                    </div>
                </div>

                <p class="theme-meta mt-5 max-w-4xl text-base leading-8">{{ $proxyma['summary'] }}</p>

                <div class="mt-8">
                    <div class="mb-5 flex items-center justify-between gap-4">
                        <p class="theme-kicker">{{ $proxyma['case_title'] }}</p>
                        <p class="cyber-log text-[11px]">{{ $proxyma['log'] }}</p>
                    </div>
                    <div class="cyber-panel-grid grid gap-4 lg:grid-cols-3">
                        @foreach ($proxyma['cards'] as $card)
                            <div class="theme-card-muted theme-card-interactive cyber-panel-card rounded-[1.3rem] p-5">
                                <h3 class="theme-title text-lg font-semibold">{{ $card['title'] }}</h3>
                                <p class="theme-meta mt-3 text-[15px] leading-7">{{ $card['text'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </article>

            <article class="cyber-dossier cyber-timeline-card relative rounded-[1.9rem] p-8 sm:p-10">
                <div class="flex flex-col gap-4 lg:flex-row lg:items-start lg:justify-between">
                    <div>
                        <a href="https://northitgroup.com/en/portfolio" target="_blank" rel="noopener noreferrer" class="theme-display theme-link-strong group inline-flex items-center gap-2 text-2xl font-semibold">
                            <span>{{ __('global.company_northitgroup') }}</span>
                            <livewire:socials.link-icon />
                        </a>
                        <p class="theme-copy mt-2 text-lg font-medium">{{ __('global.role_northitgroup') }}</p>
                    </div>
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="cyber-pill-muted inline-flex items-center rounded-[0.8rem] px-3 py-2 text-xs font-medium uppercase tracking-[0.16em]">
                            2022 - 2025
                        </span>
                        <span class="cyber-pill-muted inline-flex items-center rounded-[0.8rem] px-3 py-2 text-xs font-medium uppercase tracking-[0.16em]">
                            {{ $experienceUi['northit_track'] }}
                        </span>
                    </div>
                </div>

                <p class="theme-meta mt-5 max-w-4xl text-base leading-8">{{ __('global.experience_companies.nitg') }}</p>

                <div class="mt-8">
                    <div class="mb-5 flex items-center justify-between gap-4">
                        <p class="theme-kicker">{{ __('global.selected_projects') }}</p>
                        <p class="cyber-log text-[11px]">portfolio://northitgroup</p>
                    </div>
                    <div class="cyber-panel-grid grid gap-4 lg:grid-cols-3">
                        <div class="theme-card-muted theme-card-interactive cyber-panel-card rounded-[1.3rem] p-5">
                            <h3 class="theme-title text-lg font-semibold">
                                <a href="https://warehouseplus.de" target="_blank" rel="noopener noreferrer" class="theme-link-strong">Warehouseplus</a>
                            </h3>
                            <p class="theme-meta mt-3 text-[15px] leading-7">{{ __('global.warehouseplus') }}</p>
                        </div>
                        <div class="theme-card-muted theme-card-interactive cyber-panel-card rounded-[1.3rem] p-5">
                            <h3 class="theme-title text-lg font-semibold">
                                <a href="https://northitgroup.com/en/knowledge/101-%7B%22en%22:%22php-laravel-angular-team-north-it-group-gmbh%22,%22de%22:%22php-laravel-angular-team-north-it-group-gmbh%22%7D" target="_blank" rel="noopener noreferrer" class="theme-link-strong">Yupinion</a>
                            </h3>
                            <p class="theme-meta mt-3 text-[15px] leading-7">{{ __('global.yupinion') }}</p>
                        </div>
                        <div class="theme-card-muted theme-card-interactive cyber-panel-card rounded-[1.3rem] p-5">
                            <h3 class="theme-title text-lg font-semibold">
                                <a href="https://adandra.net" target="_blank" rel="noopener noreferrer" class="theme-link-strong">Adandra</a>
                            </h3>
                            <p class="theme-meta mt-3 text-[15px] leading-7">{{ __('global.adandra') }}</p>
                        </div>
                    </div>
                    <p class="theme-meta mt-5 text-sm">{{ __('global.more') }}</p>
                </div>
            </article>

            <article class="cyber-dossier cyber-timeline-card relative rounded-[1.9rem] p-8 sm:p-10">
                <div class="flex flex-col gap-4 lg:flex-row lg:items-start lg:justify-between">
                    <div>
                        <h3 class="theme-display theme-title text-2xl font-semibold">{{ __('global.company_sportdata') }}</h3>
                        <p class="theme-copy mt-2 text-lg font-medium">{{ __('global.role_sportdata') }}</p>
                    </div>
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="cyber-pill-muted inline-flex items-center rounded-[0.8rem] px-3 py-2 text-xs font-medium uppercase tracking-[0.16em]">
                            2020 - 2022
                        </span>
                        <span class="cyber-pill-muted inline-flex items-center rounded-[0.8rem] px-3 py-2 text-xs font-medium uppercase tracking-[0.16em]">
                            {{ $experienceUi['sportdata_track'] }}
                        </span>
                    </div>
                </div>

                <p class="theme-meta mt-5 text-base leading-8">{{ __('global.experience_companies.sportdata') }}</p>

                <div class="theme-card-muted theme-card-interactive cyber-panel-card mt-6 rounded-[1.3rem] p-5">
                    <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                        <p class="theme-kicker text-[13px] tracking-[0.18em]">{{ __('global.domain_gambling') }}</p>
                        <p class="cyber-log text-[11px]">domain://gambling</p>
                    </div>
                    <p class="theme-meta mt-3 text-[15px] leading-7">{{ __('global.sportdata') }}</p>
                </div>
            </article>

            <article class="cyber-dossier cyber-timeline-card relative rounded-[1.9rem] p-8 sm:p-10">
                <div class="flex flex-col gap-4 lg:flex-row lg:items-start lg:justify-between">
                    <div>
                        <h3 class="theme-display theme-title text-2xl font-semibold">{{ __('global.company_webit') }}</h3>
                        <p class="theme-copy mt-2 text-lg font-medium">{{ __('global.role_webit') }}</p>
                    </div>
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="cyber-pill-muted inline-flex items-center rounded-[0.8rem] px-3 py-2 text-xs font-medium uppercase tracking-[0.16em]">
                            2018 - 2020
                        </span>
                        <span class="cyber-pill-muted inline-flex items-center rounded-[0.8rem] px-3 py-2 text-xs font-medium uppercase tracking-[0.16em]">
                            {{ $experienceUi['webit_track'] }}
                        </span>
                    </div>
                </div>

                <p class="theme-meta mt-5 text-base leading-8">{{ __('global.experience_companies.webit') }}</p>

                <div class="theme-card-muted theme-card-interactive cyber-panel-card mt-6 rounded-[1.3rem] p-5">
                    <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                        <p class="theme-kicker text-[13px] tracking-[0.18em]">{{ __('global.domain_travel') }}</p>
                        <p class="cyber-log text-[11px]">domain://travel</p>
                    </div>
                    <p class="theme-meta mt-3 text-[15px] leading-7">{{ __('global.webit') }}</p>
                </div>
            </article>
        </div>
    </div>
</section>
