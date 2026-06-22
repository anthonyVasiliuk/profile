<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

@php
    $isRu = app()->getLocale() === 'ru';
    $githubUsername = 'anthonyVasiliuk';
    $githubProfileUrl = 'https://github.com/'.$githubUsername;
    $githubChartUrl = 'https://ghchart.rshah.org/09e6ff/'.$githubUsername.'.svg';

    $githubUi = [
        'kicker' => $isRu ? 'GitHub активность' : 'GitHub activity',
        'heading' => $isRu ? 'Карта коммитов и активность профиля' : 'Commit map and profile activity',
        'intro' => $isRu
            ? 'Карта GitHub показывает ритм работы с кодом и даёт быстрый внешний сигнал по активности профиля.'
            : 'The GitHub chart shows coding rhythm and gives a quick external signal of profile activity.',
        'profile_label' => $isRu ? 'GitHub профиль' : 'GitHub profile',
    ];
@endphp

<section id="github" class="cyber-section cyber-section-github relative overflow-hidden bg-[var(--page-bg)] py-16 text-[var(--heading)] lg:py-20">
    <div class="mx-auto max-w-7xl px-6">
        <div class="cyber-dossier rounded-[1.9rem] p-5 sm:p-6 lg:p-7">
            <div class="lg:pl-4">
                <div class="max-w-[72rem]">
                    <div class="flex flex-wrap items-center gap-3">
                        <p class="theme-kicker">{{ $githubUi['kicker'] }}</p>
                        <p class="cyber-log text-[11px]">github://{{ $githubUsername }}</p>
                    </div>

                    <div class="mt-5 grid gap-6 lg:grid-cols-[minmax(24rem,27rem)_minmax(0,1fr)] lg:items-center lg:gap-10">
                        <div class="cyber-github-profile">
                            <div class="flex items-start gap-4">
                                <span class="cyber-github-profile-icon" aria-hidden="true">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor"
                                        viewBox="0 0 496 512">
                                        <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/>
                                    </svg>
                                </span>

                                <div class="min-w-0">
                                    <p class="cyber-panel-title">{{ $githubUi['profile_label'] }}</p>
                                    <p class="cyber-github-profile-name mt-2">
                                        {{ $githubUsername }}
                                    </p>
                                    <a
                                        href="{{ $githubProfileUrl }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="cyber-github-profile-link mt-4 inline-flex"
                                    >
                                        github.com/{{ $githubUsername }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h2 class="theme-display theme-title max-w-[14ch] text-4xl font-semibold tracking-tight sm:text-[3.1rem] lg:text-[3.65rem]">
                                {{ $githubUi['heading'] }}
                            </h2>
                            <p class="theme-lead mt-3 max-w-[36ch] text-[1rem] leading-7 sm:text-[1.06rem]">
                                {{ $githubUi['intro'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cyber-github-chart mt-5">
                <img
                    src="{{ $githubChartUrl }}"
                    alt="GitHub contribution chart for {{ $githubUsername }}"
                    loading="lazy"
                    decoding="async"
                    width="663"
                    height="104"
                >
            </div>
        </div>
    </div>
</section>
