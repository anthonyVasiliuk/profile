<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

@php
    $isRu = app()->getLocale() === 'ru';
    $aboutUi = [
        'profile_visual' => $isRu ? "\u{041F}\u{0440}\u{043E}\u{0444}\u{0438}\u{043B}\u{044C}" : 'Profile Visual',
        'focus' => $isRu ? "\u{0424}\u{043E}\u{043A}\u{0443}\u{0441}" : 'Focus',
        'focus_text' => $isRu ? "Backend-\u{0441}\u{0438}\u{0441}\u{0442}\u{0435}\u{043C}\u{044B}, API, \u{0438}\u{043D}\u{0442}\u{0435}\u{0433}\u{0440}\u{0430}\u{0446}\u{0438}\u{0438}" : 'Backend systems, APIs, integrations',
        'mode' => $isRu ? "\u{0424}\u{043E}\u{0440}\u{043C}\u{0430}\u{0442} \u{0440}\u{0430}\u{0431}\u{043E}\u{0442}\u{044B}" : 'Mode',
        'mode_text' => $isRu ? "\u{041F}\u{0440}\u{043E}\u{0434}\u{0443}\u{043A}\u{0442}\u{043E}\u{0432}\u{044B}\u{0439} delivery \u{0438} \u{043F}\u{0435}\u{0440}\u{0435}\u{0441}\u{0442}\u{0440}\u{043E}\u{0439}\u{043A}\u{0430} legacy" : 'Product delivery and legacy rebuilds',
        'stack' => $isRu ? "\u{0421}\u{0442}\u{0435}\u{043A}" : 'Stack',
        'primary_value' => $isRu ? "\u{041E}\u{0441}\u{043D}\u{043E}\u{0432}\u{043D}\u{0430}\u{044F} \u{0446}\u{0435}\u{043D}\u{043D}\u{043E}\u{0441}\u{0442}\u{044C}" : 'Primary Value',
        'primary_value_text' => $isRu ? "\u{0427}\u{0438}\u{0441}\u{0442}\u{0430}\u{044F} backend-\u{0430}\u{0440}\u{0445}\u{0438}\u{0442}\u{0435}\u{043A}\u{0442}\u{0443}\u{0440}\u{0430} \u{0431}\u{0435}\u{0437} \u{043B}\u{0438}\u{0448}\u{043D}\u{0435}\u{0433}\u{043E} \u{0443}\u{0441}\u{043B}\u{043E}\u{0436}\u{043D}\u{0435}\u{043D}\u{0438}\u{044F}." : 'Clean backend architecture without overengineering.',
        'working_style' => $isRu ? "\u{0421}\u{0442}\u{0438}\u{043B}\u{044C} \u{0440}\u{0430}\u{0431}\u{043E}\u{0442}\u{044B}" : 'Working Style',
        'working_style_text' => $isRu ? "Hands-on \u{0438}\u{0441}\u{043F}\u{043E}\u{043B}\u{043D}\u{0435}\u{043D}\u{0438}\u{0435} \u{0438} \u{043F}\u{0440}\u{0430}\u{0433}\u{043C}\u{0430}\u{0442}\u{0438}\u{0447}\u{043D}\u{044B}\u{0435} \u{0442}\u{0435}\u{0445}\u{043D}\u{0438}\u{0447}\u{0435}\u{0441}\u{043A}\u{0438}\u{0435} \u{0440}\u{0435}\u{0448}\u{0435}\u{043D}\u{0438}\u{044F}." : 'Hands-on execution with pragmatic technical decisions.',
        'systems_engineering' => $isRu ? "\u{0421}\u{0438}\u{0441}\u{0442}\u{0435}\u{043C}\u{043D}\u{0430}\u{044F} \u{0438}\u{043D}\u{0436}\u{0435}\u{043D}\u{0435}\u{0440}\u{0438}\u{044F}" : 'Systems engineering',
        'education_degree' => $isRu ? "\u{0421}\u{0442}\u{0435}\u{043F}\u{0435}\u{043D}\u{044C} \u{0431}\u{0430}\u{043A}\u{0430}\u{043B}\u{0430}\u{0432}\u{0440}\u{0430}" : 'Bachelor\'s degree',
        'education_university' => $isRu ? "\u{0411}\u{0440}\u{0435}\u{0441}\u{0442}\u{0441}\u{043A}\u{0438}\u{0439} \u{0433}\u{043E}\u{0441}\u{0443}\u{0434}\u{0430}\u{0440}\u{0441}\u{0442}\u{0432}\u{0435}\u{043D}\u{043D}\u{044B}\u{0439} \u{0442}\u{0435}\u{0445}\u{043D}\u{0438}\u{0447}\u{0435}\u{0441}\u{043A}\u{0438}\u{0439} \u{0443}\u{043D}\u{0438}\u{0432}\u{0435}\u{0440}\u{0441}\u{0438}\u{0442}\u{0435}\u{0442}" : 'Brest State Technical University',
        'education_faculty' => $isRu ? "\u{0424}\u{0430}\u{043A}\u{0443}\u{043B}\u{044C}\u{0442}\u{0435}\u{0442} \u{0432}\u{044B}\u{0447}\u{0438}\u{0441}\u{043B}\u{0438}\u{0442}\u{0435}\u{043B}\u{044C}\u{043D}\u{044B}\u{0445} \u{043C}\u{0430}\u{0448}\u{0438}\u{043D}, \u{0441}\u{0438}\u{0441}\u{0442}\u{0435}\u{043C} \u{0438} \u{0441}\u{0435}\u{0442}\u{0435}\u{0439}" : 'Faculty of Computers, Systems and Networks',
        'education_record' => $isRu ? "\u{0410}\u{043A}\u{0430}\u{0434}\u{0435}\u{043C}\u{0438}\u{0447}\u{0435}\u{0441}\u{043A}\u{0430}\u{044F} \u{0437}\u{0430}\u{043F}\u{0438}\u{0441}\u{044C}" : 'Academic record',
        'education_specialty' => $isRu ? "\u{0421}\u{043F}\u{0435}\u{0446}\u{0438}\u{0430}\u{043B}\u{044C}\u{043D}\u{043E}\u{0441}\u{0442}\u{044C}" : 'Specialty',
        'control_room' => $isRu ? "\u{0420}\u{0435}\u{0436}\u{0438}\u{043C}: control room" : 'Mode: control room',
        'workspace_tag' => $isRu ? "\u{0411}\u{044D}\u{043A}\u{0435}\u{043D}\u{0434} / API / delivery" : 'Backend / API / delivery',
        'period_label' => $isRu ? "\u{041F}\u{0435}\u{0440}\u{0438}\u{043E}\u{0434}" : 'Period',
        'degree_label' => $isRu ? "\u{0421}\u{0442}\u{0435}\u{043F}\u{0435}\u{043D}\u{044C}" : 'Degree',
        'faculty_label' => $isRu ? "\u{0424}\u{0430}\u{043A}\u{0443}\u{043B}\u{044C}\u{0442}\u{0435}\u{0442}" : 'Faculty',
    ];
@endphp

<section id="about" class="cyber-section cyber-section-about relative bg-[var(--page-bg-alt)] py-24 lg:py-28">
    <div class="mx-auto max-w-7xl px-6">
        <div class="cyber-about-shell rounded-[2rem] p-4 sm:p-5">
            <div
                class="cyber-about-stage rounded-[1.7rem] p-6 sm:p-8 lg:p-10"
                style="background-image:
                    linear-gradient(180deg, rgba(5, 12, 24, 0.82) 0%, rgba(5, 12, 24, 0.94) 92%),
                    linear-gradient(90deg, rgba(4, 14, 28, 0.92) 0%, rgba(6, 17, 32, 0.78) 34%, rgba(8, 18, 34, 0.62) 58%, rgba(19, 9, 35, 0.76) 100%);"
            >
                <div class="grid min-h-[35rem] gap-6 lg:grid-cols-[minmax(0,1.18fr)_minmax(19rem,24rem)]">
                    <div class="relative z-10 flex flex-col">
                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <p class="theme-kicker">{{ __('global.about_me') }}</p>
                            <div class="flex flex-wrap items-center gap-3">
                                <span class="cyber-chip inline-flex rounded-full px-3 py-1 text-[11px] font-medium uppercase tracking-[0.18em]">{{ $aboutUi['workspace_tag'] }}</span>
                                <p class="cyber-log text-[11px]">overview://backend-operator</p>
                            </div>
                        </div>

                        <div class="mt-8 max-w-3xl">
                            <p class="cyber-log text-xs sm:text-sm">{{ $aboutUi['control_room'] }}</p>
                            <h2 class="theme-display theme-title mt-4 max-w-2xl text-3xl font-semibold tracking-tight sm:text-[2.9rem]">
                                {{ __('global.position') }}
                            </h2>
                            <p class="theme-lead mt-6 max-w-[60ch]">
                                {{ __('global.about_description') }}
                            </p>
                        </div>

                        <div class="mt-8 grid gap-4 xl:max-w-3xl xl:grid-cols-2">
                            <div class="cyber-about-note rounded-[1.25rem] p-5">
                                <p class="cyber-panel-title">{{ $aboutUi['primary_value'] }}</p>
                                <p class="theme-copy mt-3 text-sm leading-7">{{ $aboutUi['primary_value_text'] }}</p>
                            </div>
                            <div class="cyber-about-note rounded-[1.25rem] p-5">
                                <p class="cyber-panel-title">{{ $aboutUi['working_style'] }}</p>
                                <p class="theme-copy mt-3 text-sm leading-7">{{ $aboutUi['working_style_text'] }}</p>
                            </div>
                        </div>

                        <div class="mt-auto pt-8">
                            <div class="grid gap-4 md:grid-cols-3">
                                <div class="cyber-about-metric rounded-[1.15rem] p-4">
                                    <p class="cyber-panel-title">{{ $aboutUi['focus'] }}</p>
                                    <p class="theme-copy mt-3 text-sm leading-7">{{ $aboutUi['focus_text'] }}</p>
                                </div>
                                <div class="cyber-about-metric rounded-[1.15rem] p-4">
                                    <p class="cyber-panel-title">{{ $aboutUi['mode'] }}</p>
                                    <p class="theme-copy mt-3 text-sm leading-7">{{ $aboutUi['mode_text'] }}</p>
                                </div>
                                <div class="cyber-about-metric rounded-[1.15rem] p-4">
                                    <p class="cyber-panel-title">{{ $aboutUi['stack'] }}</p>
                                    <p class="theme-copy mt-3 text-sm leading-7">Laravel, SQL, JavaScript, Docker</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <aside class="cyber-about-aside relative z-10 rounded-[1.5rem] p-6 sm:p-7">
                        <div class="flex items-center justify-between gap-4">
                            <p class="theme-kicker">{{ __('global.education') }}</p>
                            <p class="cyber-log text-[11px]">record://brest-state-tech</p>
                        </div>

                        <div class="relative mt-7">
                            <p class="cyber-log text-[11px]">degree://systems-engineering</p>
                            <h3 class="theme-display theme-title mt-4 text-2xl font-semibold sm:text-[2.15rem]">
                                {{ $aboutUi['systems_engineering'] }}
                            </h3>
                            <p class="theme-meta mt-3 text-sm leading-7">
                                {{ $aboutUi['education_university'] }}
                            </p>
                        </div>

                        <div class="cyber-divider mt-6"></div>

                        <div class="mt-6 space-y-3">
                            <div class="cyber-about-meta-row">
                                <span class="cyber-log text-[11px]">{{ $aboutUi['period_label'] }}</span>
                                <span class="theme-copy text-sm font-medium">2010-2015</span>
                            </div>
                            <div class="cyber-about-meta-row">
                                <span class="cyber-log text-[11px]">{{ $aboutUi['degree_label'] }}</span>
                                <span class="theme-copy text-sm font-medium">{{ $aboutUi['education_degree'] }}</span>
                            </div>
                            <div class="cyber-about-meta-row">
                                <span class="cyber-log text-[11px]">{{ $aboutUi['education_specialty'] }}</span>
                                <span class="theme-copy text-sm font-medium">{{ $aboutUi['systems_engineering'] }}</span>
                            </div>
                            <div class="cyber-about-meta-row">
                                <span class="cyber-log text-[11px]">{{ $aboutUi['faculty_label'] }}</span>
                                <span class="theme-copy text-sm font-medium">{{ $aboutUi['education_faculty'] }}</span>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
