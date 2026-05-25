@php
    $footerContactLabel = app()->getLocale() === 'ru' ? 'Написать в Telegram' : 'Contact via Telegram';
    $isRu = app()->getLocale() === 'ru';
    $footerUi = [
        'navigation' => $isRu ? 'Навигация' : 'Navigation',
        'channels' => $isRu ? 'Контакты' : 'Channels',
        'channels_text' => $isRu ? 'Открыт к backend-, продуктовым и интеграционным задачам.' : 'Open for backend, product, and integration work.',
        'portfolio_text' => $isRu ? 'Личный сайт о backend-работе: Laravel, API, интеграции и legacy-системы.' : 'Personal site about backend work: Laravel, APIs, integrations, and legacy systems.',
        'portfolio_status' => $isRu ? '> открыт к backend-работе и точечному consulting' : '> open to backend work and focused consulting',
        'build_line' => $isRu ? '> Laravel, API, интеграции, legacy-код' : '> Laravel, APIs, integrations, legacy code',
    ];
@endphp

<footer class="cyber-section cyber-section-footer relative border-t text-[var(--text)]" style="border-color: var(--line); background-color: var(--footer-bg);">
    <div class="theme-top-line absolute inset-x-0 top-0 h-px"></div>
    <div class="absolute left-[-7rem] top-16 -z-10 h-48 w-48 rounded-full blur-3xl" style="background: rgba(9, 230, 255, 0.12);"></div>
    <div class="absolute right-[-6rem] top-10 -z-10 h-56 w-56 rounded-full blur-3xl" style="background: rgba(255, 56, 209, 0.1);"></div>
    <div class="absolute inset-x-[18%] bottom-0 -z-10 h-32 blur-3xl" style="background: radial-gradient(circle at center, rgba(125, 89, 255, 0.18), transparent 70%);"></div>
    <div class="mx-auto max-w-7xl px-6 py-14">
        <div class="rounded-[1.8rem] border p-8 sm:p-10" style="border-color: rgba(9, 230, 255, 0.14); background: linear-gradient(180deg, rgba(11, 22, 41, 0.54) 0%, rgba(8, 16, 30, 0.62) 100%); box-shadow: 0 18px 58px rgba(2, 6, 23, 0.16);">
            <div class="cyber-footer-grid grid gap-10 xl:grid-cols-[1.18fr_0.72fr_0.72fr]">
                <div class="space-y-5">
                    <div>
                        <h2 class="theme-display theme-title text-2xl font-semibold">{{ __('global.my_name') }}</h2>
                        <p class="theme-meta mt-2 text-sm">{{ __('global.position') }}</p>
                    </div>
                    <p class="theme-copy max-w-xl text-sm leading-7">
                        {{ __('global.footer_pitch') }}
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="cyber-pill-muted inline-flex items-center rounded-full px-3 py-1.5 text-[11px] font-medium uppercase tracking-[0.18em]">Laravel</span>
                        <span class="cyber-pill-muted inline-flex items-center rounded-full px-3 py-1.5 text-[11px] font-medium uppercase tracking-[0.18em]">PHP</span>
                        <span class="cyber-pill-muted inline-flex items-center rounded-full px-3 py-1.5 text-[11px] font-medium uppercase tracking-[0.18em]">APIs</span>
                        <span class="cyber-pill-muted inline-flex items-center rounded-full px-3 py-1.5 text-[11px] font-medium uppercase tracking-[0.18em]">Delivery</span>
                    </div>
                    <p class="cyber-log text-xs">{{ $footerUi['build_line'] }}</p>
                </div>

                <nav class="flex flex-col gap-3 text-sm">
                    <p class="cyber-panel-title">{{ $footerUi['navigation'] }}</p>
                    <a href="#about" class="theme-link">{{ __('global.about_me') }}</a>
                    <a href="#skills" class="theme-link">{{ __('global.skills') }}</a>
                    <a href="#projects" class="theme-link">{{ app()->getLocale() === 'ru' ? 'Проекты' : 'Projects' }}</a>
                    <a href="#experience" class="theme-link">{{ __('global.experience') }}</a>
                    <a href="#recommendations" class="theme-link">{{ __('global.testimonials') }}</a>
                </nav>

                <div class="space-y-5">
                    <div>
                        <p class="cyber-panel-title">{{ $footerUi['channels'] }}</p>
                        <p class="theme-meta mt-2 text-sm">{{ $footerUi['channels_text'] }}</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <livewire:socials.linkedin />
                        <livewire:socials.github />
                        <livewire:socials.telegram />
                    </div>
                    <a
                        href="https://t.me/AntonVasiliuk"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="theme-button-secondary inline-flex items-center justify-center rounded-[0.9rem] px-4 py-3 text-xs font-semibold uppercase tracking-[0.14em]"
                    >
                        {{ $footerContactLabel }}
                    </a>
                </div>
            </div>
            <div class="cyber-divider mt-8"></div>
            <div class="mt-5 flex flex-col gap-3 text-sm sm:flex-row sm:items-center sm:justify-between">
                <p class="theme-meta">{{ $footerUi['portfolio_text'] }}</p>
                <p class="cyber-log text-xs">{{ $footerUi['portfolio_status'] }}</p>
            </div>
        </div>
        <div class="theme-meta px-2 pt-5 text-center text-sm">
            &copy; {{ date('Y') }} {{ __('global.my_name') }}.
        </div>
    </div>
</footer>
