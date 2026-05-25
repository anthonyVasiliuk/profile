<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

@php
    $isRu = app()->getLocale() === 'ru';

    $recommendations = [
        [
            'image' => 'kling.jpg',
            'name' => __('global.person_1_name'),
            'position' => __('global.person_1_position'),
            'date' => '01 / 2025',
            'text' => __('global.testimonial_1'),
        ],
        [
            'image' => 'stephan.jpg',
            'name' => __('global.person_2_name'),
            'position' => __('global.person_2_position'),
            'date' => '02 / 2025',
            'text' => __('global.testimonial_2'),
        ],
        [
            'image' => 'thomas.jpg',
            'name' => __('global.person_3_name'),
            'position' => __('global.person_3_position'),
            'date' => null,
            'text' => __('global.testimonial_3'),
        ],
    ];

    $recommendationUi = [
        'reference_type' => $isRu ? 'Тип рекомендаций' : 'Reference Type',
        'reference_type_text' => $isRu ? 'Люди, с которыми я работал напрямую на длинных коммерческих проектах.' : 'Direct people who worked with me on long-running commercial delivery.',
        'signal' => $isRu ? 'Что подчёркивают' : 'Signal',
        'signal_text' => $isRu ? 'Надёжность, техническую ответственность, backend-глубину и прагматичное исполнение.' : 'Reliability, technical ownership, backend depth, and pragmatic execution.',
        'expand' => $isRu ? 'Читать полностью' : 'Read full reference',
        'collapse' => $isRu ? 'Свернуть' : 'Collapse',
        'quote_label' => $isRu ? 'Рекомендация' : 'Reference',
    ];
@endphp

<section id="recommendations" class="cyber-section cyber-section-recommendations bg-[var(--page-bg)] py-24 lg:py-28">
    <div class="mx-auto max-w-7xl px-6">
        <div class="rounded-[1.95rem] border p-8 sm:p-10" style="border-color: rgba(9, 230, 255, 0.14); background: linear-gradient(180deg, rgba(11, 22, 41, 0.62) 0%, rgba(8, 16, 30, 0.68) 100%); box-shadow: 0 18px 58px rgba(2, 6, 23, 0.2);">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-3xl">
                    <div class="flex items-center justify-between gap-4">
                        <p class="theme-kicker">{{ __('global.testimonials') }}</p>
                        <p class="cyber-log text-[11px]">signal://references</p>
                    </div>
                    <h2 class="theme-display theme-title mt-5 text-3xl font-semibold tracking-tight sm:text-[2.95rem]">
                        {{ __('global.recommendations_heading') }}
                    </h2>
                    <p class="theme-lead mt-6 max-w-[60ch]">
                        {{ __('global.recommendations_intro') }}
                    </p>
                </div>

                <div class="grid w-full gap-4 lg:max-w-2xl lg:grid-cols-2">
                    <div class="cyber-stat rounded-[1rem] p-4">
                        <p class="cyber-panel-title">{{ $recommendationUi['reference_type'] }}</p>
                        <p class="theme-copy mt-2 text-sm leading-6">{{ $recommendationUi['reference_type_text'] }}</p>
                    </div>
                    <div class="cyber-stat rounded-[1rem] p-4">
                        <p class="cyber-panel-title">{{ $recommendationUi['signal'] }}</p>
                        <p class="theme-copy mt-2 text-sm leading-6">{{ $recommendationUi['signal_text'] }}</p>
                    </div>
                </div>
            </div>

            <div class="cyber-divider mt-8"></div>

            <div class="mt-8 space-y-6">
                @foreach ($recommendations as $index => $recommendation)
                    <article class="theme-card-muted theme-card-interactive cyber-reference-wide-card rounded-[1.7rem] p-6 sm:p-7">
                        <div class="grid gap-6 lg:grid-cols-[14.5rem_minmax(0,1fr)] lg:items-start">
                            <div class="cyber-reference-aside rounded-[1.35rem] p-5">
                                <p class="cyber-panel-title">{{ $recommendationUi['quote_label'] }} {{ $index + 1 }}</p>
                                <div class="mt-4 flex items-center gap-4">
                                    <img
                                        src="{{ Vite::asset('resources/images/recomendations/'.$recommendation['image']) }}"
                                        class="h-16 w-16 rounded-full object-cover ring-4"
                                        style="--tw-ring-color: rgba(9, 230, 255, 0.12);"
                                        alt="{{ $recommendation['name'] }}"
                                        loading="lazy"
                                        decoding="async"
                                        width="100"
                                        height="100"
                                    >
                                    <div class="min-w-0">
                                        <h3 class="theme-title text-xl font-semibold leading-6">{{ $recommendation['name'] }}</h3>
                                        <p class="theme-meta mt-2 text-sm leading-6">{{ $recommendation['position'] }}</p>
                                    </div>
                                </div>

                                @if ($recommendation['date'])
                                    <div class="mt-4">
                                        <span class="cyber-pill-muted inline-flex rounded-full px-3 py-1 text-[11px] font-medium uppercase tracking-[0.18em]">
                                            {{ $recommendation['date'] }}
                                        </span>
                                    </div>
                                @endif
                            </div>

                            <div class="flex h-full flex-col lg:pt-1">
                                <details class="cyber-reference-details flex-1">
                                    <summary class="list-none">
                                        <div class="cyber-reference-preview theme-copy cyber-reference-text">
                                            "{{ $recommendation['text'] }}"
                                        </div>
                                        <span class="cyber-reference-toggle mt-5 inline-flex items-center rounded-full px-3 py-2 text-[11px] font-semibold uppercase tracking-[0.18em]">
                                            <span class="cyber-reference-toggle-open">{{ $recommendationUi['expand'] }}</span>
                                            <span class="cyber-reference-toggle-close">{{ $recommendationUi['collapse'] }}</span>
                                        </span>
                                    </summary>
                                    <p class="theme-copy cyber-reference-text mt-5">
                                        "{{ $recommendation['text'] }}"
                                    </p>
                                </details>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
