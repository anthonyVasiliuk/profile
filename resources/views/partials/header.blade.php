<header class="fixed inset-x-0 top-0 z-50 px-3 py-3 sm:px-6 sm:py-4">
    <div class="mx-auto max-w-7xl">
        <div class="cyber-nav-shell rounded-[1.25rem] px-4 py-3 sm:rounded-[1.35rem] sm:px-6">
            <div class="flex items-center justify-between gap-3 sm:gap-6">
                <a href="#top" class="group min-w-0 shrink-0">
                    <p class="theme-display theme-title truncate text-base font-semibold tracking-tight transition group-hover:text-[var(--accent-strong)] sm:text-xl">
                        {{ __('global.my_name') }}
                    </p>
                    <p class="theme-meta hidden text-sm lg:block">
                        {{ __('global.position') }}
                    </p>
                </a>

                <nav class="hidden items-center gap-2 lg:flex">
                    <a href="#about" class="cyber-nav-link">{{ __('global.about') }}</a>
                    <a href="#skills" class="cyber-nav-link">{{ __('global.skills') }}</a>
                    <a href="#projects" class="cyber-nav-link">{{ app()->getLocale() === 'ru' ? 'Проекты' : 'Projects' }}</a>
                    <a href="#experience" class="cyber-nav-link">{{ __('global.experience') }}</a>
                    <a href="#recommendations" class="cyber-nav-link">{{ __('global.nav_recommendations') }}</a>
                </nav>

                <div class="flex items-center gap-2 sm:gap-3">
                    <a
                        href="{{ route('cv', ['locale' => app()->getLocale()]) }}"
                        class="theme-button-primary inline-flex items-center gap-2 rounded-[0.8rem] px-3 py-2 text-sm font-medium"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                        </svg>
                        <span class="hidden sm:inline">{{ __('global.download_cv') }}</span>
                        <span class="sm:hidden">CV</span>
                    </a>

                    <a
                        href="{{ route('setLocale', ['locale' => app()->getLocale() === 'ru' ? 'en' : 'ru']) }}"
                        class="theme-button-secondary inline-flex items-center rounded-[0.8rem] px-3 py-2 text-sm font-medium"
                    >
                        {{ __('global.language_switch') }}
                    </a>

                    <div class="hidden items-center gap-3 sm:flex">
                        <livewire:socials.linkedin />
                        <livewire:socials.github />
                        <livewire:socials.telegram />
                    </div>
                </div>
            </div>

            <div class="cyber-divider mt-3 lg:hidden"></div>
            <div class="mt-3 lg:hidden">
                <div class="flex flex-wrap items-center gap-x-2 gap-y-2">
                    <a href="#about" class="cyber-nav-link">{{ __('global.about') }}</a>
                    <a href="#skills" class="cyber-nav-link">{{ __('global.skills') }}</a>
                    <a href="#projects" class="cyber-nav-link">{{ app()->getLocale() === 'ru' ? 'Проекты' : 'Projects' }}</a>
                    <a href="#experience" class="cyber-nav-link">{{ __('global.experience') }}</a>
                    <a href="#recommendations" class="cyber-nav-link">{{ __('global.nav_recommendations') }}</a>
                </div>

                <div class="mt-3 flex items-center justify-end gap-3 sm:hidden">
                    <livewire:socials.linkedin />
                    <livewire:socials.github />
                    <livewire:socials.telegram />
                </div>
            </div>
        </div>
    </div>
</header>
