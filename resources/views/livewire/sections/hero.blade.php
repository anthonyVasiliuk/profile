<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

@php
    $stack = ['Laravel', 'PHP', 'MySQL', 'JavaScript', 'Docker', 'Git'];
    $isRu = app()->getLocale() === 'ru';
    $heroUi = [
        'overview' => $isRu ? 'Системный обзор' : 'System Overview',
        'mode' => $isRu ? 'backend режим' : 'backend mode',
        'projects' => $isRu ? 'Проекты' : 'Projects',
        'terminal' => $isRu ? 'Терминал' : 'Terminal',
        'developer_1' => $isRu ? '// Backend-разработчик' : '// Backend Developer',
        'developer_2' => '// PHP . Laravel . SQL . JavaScript',
        'developer_3' => $isRu ? '// Создаю масштабируемые системы' : '// Building scalable systems',
        'developer_4' => $isRu ? '// и чистые API' : '// and clean APIs',
        'boot_1' => '> init portfolio.exe',
        'boot_2' => $isRu ? 'booting api-service ... готово' : 'booting api-service ... done',
        'boot_3' => $isRu ? 'booting db-service ... готово' : 'booting db-service ... done',
        'boot_4' => $isRu ? 'booting worker ... готово' : 'booting worker ... done',
        'boot_5' => $isRu ? 'все системы онлайн' : 'all systems online',
    ];
@endphp

<section class="cyber-section relative isolate overflow-hidden bg-[var(--page-bg)] text-[var(--heading)]">
    <div
        class="absolute inset-0 -z-10 bg-cover bg-center"
        style="background-image:
            linear-gradient(180deg, rgba(4, 10, 20, 0.34) 0%, rgba(4, 10, 20, 0.7) 52%, rgba(4, 10, 20, 0.9) 100%),
            linear-gradient(90deg, rgba(5, 12, 24, 0.82) 0%, rgba(6, 14, 27, 0.58) 34%, rgba(16, 8, 30, 0.7) 100%),
            url('{{ Vite::asset('resources/images/backgrounds/bg.jpg') }}');"
    ></div>
    <div class="absolute inset-x-0 top-0 -z-10 h-[28rem] bg-[radial-gradient(circle_at_center,rgba(9,230,255,0.06),transparent_58%)]"></div>
    <div class="absolute left-[-7rem] top-28 -z-10 h-64 w-64 rounded-full blur-3xl" style="background-color: rgba(9, 230, 255, 0.09);"></div>
    <div class="absolute right-[-5rem] top-16 -z-10 h-72 w-72 rounded-full blur-3xl" style="background-color: rgba(255, 56, 209, 0.08);"></div>

    <div class="mx-auto grid min-h-[calc(100vh-6rem)] max-w-7xl gap-14 px-6 pb-20 pt-32 lg:grid-cols-[1.02fr_0.98fr] lg:items-stretch lg:gap-16 lg:pb-24 lg:pt-36">
        <div class="flex max-w-3xl flex-col justify-center lg:h-full">
            <div class="theme-pill inline-flex items-center rounded-[0.85rem] px-4 py-2 text-xs font-semibold uppercase tracking-[0.16em] backdrop-blur sm:text-sm">
                {{ __('global.hero_badge') }}
            </div>

            <h1 class="theme-display mt-6 max-w-4xl text-5xl font-semibold leading-[0.92] sm:text-6xl lg:text-[5.5rem]">
                <span class="block text-white">{{ __('global.hello') }}, {{ __('global.iam') }}</span>
                <span class="mt-2 block text-[var(--accent)] [text-shadow:0_0_28px_rgba(9,230,255,0.28)]">
                    {{ __('global.my_name') }}<span class="text-[var(--accent-secondary)]">_</span>
                </span>
            </h1>

            <p class="mt-6 max-w-2xl text-xl font-medium text-[var(--accent-strong)] sm:text-2xl">
                {{ __('global.position') }}
            </p>

            <p class="theme-lead mt-5 max-w-2xl">
                {{ __('global.hero_description') }}
            </p>

            <div class="mt-8 flex flex-wrap gap-3">
                @foreach ($stack as $item)
                    <span class="cyber-chip inline-flex items-center rounded-[0.8rem] px-3 py-2 text-xs font-medium uppercase tracking-[0.14em]">
                        {{ $item }}
                    </span>
                @endforeach
            </div>

            <div class="mt-10 flex flex-wrap gap-4">
                <a
                    href="#experience"
                    class="theme-button-primary inline-flex items-center justify-center rounded-[0.95rem] px-7 py-3.5 text-sm font-semibold uppercase tracking-[0.12em]"
                >
                    {{ __('global.hero_primary_cta') }}
                </a>
                <a
                    href="https://t.me/AntonVasiliuk"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="theme-button-secondary inline-flex items-center justify-center rounded-[0.95rem] px-7 py-3.5 text-sm font-semibold uppercase tracking-[0.12em]"
                >
                    {{ __('global.hero_secondary_cta') }}
                </a>
            </div>

            <div class="cyber-terminal mt-10 max-w-2xl rounded-[1rem] p-5">
                <div class="mb-3 flex items-center gap-2">
                    <span class="h-2.5 w-2.5 rounded-full bg-[var(--accent-secondary)]"></span>
                    <span class="h-2.5 w-2.5 rounded-full bg-[var(--accent)]"></span>
                    <span class="h-2.5 w-2.5 rounded-full bg-[var(--accent-violet)]"></span>
                </div>
                <div class="cyber-log space-y-2 text-xs sm:text-sm">
                    <p>{{ $heroUi['boot_1'] }}</p>
                    <p>&gt; {{ __('global.hero_stats_backend_label') }}</p>
                    <p>&gt; {{ __('global.hero_stats_delivery_label') }}</p>
                    <p>&gt; {{ __('global.position_experience') }}</p>
                    <p class="text-[var(--accent-secondary)]">&gt; ready_</p>
                </div>
            </div>
        </div>

        <div class="relative flex lg:h-full lg:pl-4">
            <div class="absolute -inset-6 rounded-[2rem] blur-3xl" style="background: radial-gradient(circle at center, rgba(9, 230, 255, 0.1), rgba(255, 56, 209, 0.06), transparent 72%);"></div>

            <div class="cyber-window relative flex h-full w-full flex-col overflow-hidden rounded-[1.8rem] p-5">
                <div class="relative flex items-center justify-between border-b pb-4 text-[11px] uppercase tracking-[0.26em]" style="border-color: var(--line); color: var(--accent);">
                    <span>{{ $heroUi['overview'] }}</span>
                    <span>{{ $heroUi['mode'] }}</span>
                </div>

                <div class="relative mt-5 flex-1">
                    <div class="grid h-full gap-4 lg:grid-cols-[1.08fr_0.92fr]">
                    <div
                        class="cyber-city h-full min-h-[22rem] rounded-[1.4rem] bg-cover bg-center p-5"
                    >
                        <div class="relative flex h-full flex-col justify-between">
                            <div class="flex flex-wrap gap-2">
                                <span class="cyber-chip rounded-[0.75rem] px-3 py-1.5 text-[11px] font-medium uppercase tracking-[0.16em]">Laravel</span>
                                <span class="cyber-chip rounded-[0.75rem] px-3 py-1.5 text-[11px] font-medium uppercase tracking-[0.16em]">PHP</span>
                                <span class="cyber-chip rounded-[0.75rem] px-3 py-1.5 text-[11px] font-medium uppercase tracking-[0.16em]">SQL</span>
                            </div>

                            <div class="max-w-xs space-y-2 pb-3">
                                <p class="cyber-log text-base sm:text-lg">{{ $heroUi['developer_1'] }}</p>
                                <p class="cyber-log text-base sm:text-lg">{{ $heroUi['developer_2'] }}</p>
                                <p class="cyber-log text-base sm:text-lg">{{ $heroUi['developer_3'] }}</p>
                                <p class="cyber-log text-base sm:text-lg">{{ $heroUi['developer_4'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid auto-rows-fr gap-4">
                        <div class="cyber-terminal flex h-full flex-col rounded-[1.2rem] p-4">
                            <p class="mb-3 text-[11px] font-semibold uppercase tracking-[0.24em] text-[var(--accent)]">{{ $heroUi['projects'] }}</p>
                            <div class="cyber-log space-y-2 text-xs">
                                <p>/api-gateway</p>
                                <p>/auth-service</p>
                                <p>/user-service</p>
                                <p>/payment-service</p>
                                <p>/notification-service</p>
                                <p>/search-service</p>
                            </div>
                        </div>

                        <div class="cyber-terminal flex h-full flex-col rounded-[1.2rem] p-4">
                            <p class="mb-3 text-[11px] font-semibold uppercase tracking-[0.24em] text-[var(--accent)]">{{ $heroUi['terminal'] }}</p>
                            <div class="cyber-log space-y-2 text-xs">
                                <p>docker compose up -d</p>
                                <p>{{ $heroUi['boot_2'] }}</p>
                                <p>{{ $heroUi['boot_3'] }}</p>
                                <p>{{ $heroUi['boot_4'] }}</p>
                                <p class="text-[var(--accent-secondary)]">{{ $heroUi['boot_5'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="relative mt-4 grid gap-3 sm:grid-cols-3">
                    <div class="cyber-hero-stat theme-card-interactive rounded-[1rem] border p-4">
                        <p class="text-sm font-semibold text-[var(--accent-strong)]">{{ __('global.hero_stats_years') }}</p>
                        <p class="theme-copy mt-2 text-sm leading-6">{{ __('global.hero_stats_years_label') }}</p>
                    </div>
                    <div class="cyber-hero-stat theme-card-interactive rounded-[1rem] border p-4">
                        <p class="text-sm font-semibold text-[var(--accent-strong)]">{{ __('global.hero_stats_backend') }}</p>
                        <p class="theme-copy mt-2 text-sm leading-6">{{ __('global.hero_stats_backend_label') }}</p>
                    </div>
                    <div class="cyber-hero-stat theme-card-interactive rounded-[1rem] border p-4">
                        <p class="text-sm font-semibold text-[var(--accent-strong)]">{{ __('global.hero_stats_delivery') }}</p>
                        <p class="theme-copy mt-2 text-sm leading-6">{{ __('global.hero_stats_delivery_label') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
