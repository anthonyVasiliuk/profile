<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

@php
    $isRu = app()->getLocale() === 'ru';

    $projectsUi = [
        'kicker' => $isRu ? 'Собственные проекты' : 'Own projects',
        'heading' => $isRu ? 'Независимые продукты и product-side builds' : 'Independent products and side builds',
        'intro' => $isRu
            ? 'Отдельные проекты, где я выступаю не только как backend-разработчик, но и как человек, который собирает структуру продукта, логику экранов и общую подачу.'
            : 'Independent projects where I am not only the backend developer, but also the person shaping the product structure, screen flow, and presentation.',
        'summary_a' => $isRu ? '2 активных продукта' : '2 active products',
        'summary_b' => $isRu ? 'Backend + product thinking' : 'Backend + product thinking',
        'summary_c' => $isRu ? 'Личный ownership' : 'Personal ownership',
        'astry_label' => $isRu ? 'AI-assisted astrology product' : 'AI-assisted astrology product',
        'astry_text' => $isRu
            ? 'AstryHub — мой отдельный продукт, где я пробую более понятный формат астрологии: короткие разборы, чёткая структура, разделение натальных и транзитных слоёв и AI-чат поверх этого.'
            : 'AstryHub is a personal product where I am trying a simpler format for astrology: short readings, clear structure, separate natal and transit layers, and an AI chat on top.',
        'astry_signal' => $isRu ? 'Что здесь ценно' : 'Why it matters',
        'astry_signal_text' => $isRu
            ? 'Для меня это пример не просто лендинга, а живого продукта: с логикой, оплатой, контентом и нормальной двуязычной структурой.'
            : 'For me, this is an example of a real product, not just a landing page: it has its own logic, pricing model, content structure, and bilingual setup.',
        'instiles_label' => $isRu ? 'Independent storefront project' : 'Independent storefront project',
        'instiles_text' => $isRu
            ? 'Instiles.online — отдельный витринный проект, где я больше работаю с подачей: как показать ассортимент, как собрать экран, как довести пользователя от первого блока до действия.'
            : 'Instiles.online is a separate storefront-style project where I spend more time on presentation: how to show the catalog, how to structure the screen, and how to move the user from the first block to action.',
        'instiles_signal' => $isRu ? 'Что здесь ценно' : 'Why it matters',
        'instiles_signal_text' => $isRu
            ? 'Показывает, что мне интересен не только backend, но и то, как продукт выглядит, читается и ведёт пользователя дальше.'
            : 'It shows that I care not only about backend logic, but also about how a product looks, reads, and moves the user forward.',
        'visit' => $isRu ? 'Открыть проект' : 'Open project',
        'stack' => $isRu ? 'Фокус' : 'Focus',
    ];

    $products = [
        [
            'name' => 'AstryHub',
            'url' => 'https://astryhub.com/',
            'label' => $projectsUi['astry_label'],
            'text' => $projectsUi['astry_text'],
            'signal_title' => $projectsUi['astry_signal'],
            'signal_text' => $projectsUi['astry_signal_text'],
            'log' => 'product://astryhub',
            'chips' => ['AI chat', 'Credits', 'FAQ', 'Glossary', 'RU/EN'],
        ],
        [
            'name' => 'Instiles.online',
            'url' => 'https://instiles.online/',
            'label' => $projectsUi['instiles_label'],
            'text' => $projectsUi['instiles_text'],
            'signal_title' => $projectsUi['instiles_signal'],
            'signal_text' => $projectsUi['instiles_signal_text'],
            'log' => 'product://instiles',
            'chips' => $isRu ? ['Storefront', 'Каталог', 'UX flow', 'Content structure'] : ['Storefront', 'Catalog', 'UX flow', 'Content structure'],
        ],
    ];
@endphp

<section id="projects" class="cyber-section cyber-section-projects relative overflow-hidden bg-[var(--page-bg-alt)] py-24 lg:py-28">
    <div class="absolute inset-0 -z-10" style="background-image: radial-gradient(circle at 15% 22%, rgba(9, 230, 255, 0.05), transparent 24%), radial-gradient(circle at 82% 18%, rgba(126, 87, 255, 0.07), transparent 28%);"></div>
    <div class="mx-auto max-w-7xl px-6">
        <div class="rounded-[1.95rem] border p-8 sm:p-10" style="border-color: rgba(9, 230, 255, 0.14); background: linear-gradient(180deg, rgba(11, 22, 41, 0.62) 0%, rgba(8, 16, 30, 0.68) 100%); box-shadow: 0 18px 58px rgba(2, 6, 23, 0.2);">
            <div class="flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-3xl">
                    <div class="flex items-center justify-between gap-4">
                        <p class="theme-kicker">{{ $projectsUi['kicker'] }}</p>
                        <p class="cyber-log text-[11px]">lab://independent-products</p>
                    </div>
                    <h2 class="theme-display theme-title mt-5 text-3xl font-semibold tracking-tight sm:text-[2.95rem]">
                        {{ $projectsUi['heading'] }}
                    </h2>
                    <p class="theme-lead mt-6 max-w-[60ch]">
                        {{ $projectsUi['intro'] }}
                    </p>
                </div>

                <div class="grid w-full gap-4 lg:max-w-2xl lg:grid-cols-3">
                    <div class="cyber-stat rounded-[1rem] p-4">
                        <p class="cyber-panel-title">{{ $projectsUi['summary_a'] }}</p>
                    </div>
                    <div class="cyber-stat rounded-[1rem] p-4">
                        <p class="cyber-panel-title">{{ $projectsUi['summary_b'] }}</p>
                    </div>
                    <div class="cyber-stat rounded-[1rem] p-4">
                        <p class="cyber-panel-title">{{ $projectsUi['summary_c'] }}</p>
                    </div>
                </div>
            </div>

            <div class="cyber-divider mt-8"></div>

            <div class="mt-8 grid gap-6 xl:grid-cols-2">
                @foreach ($products as $product)
                    <article class="theme-card-muted theme-card-interactive rounded-[1.7rem] p-6 sm:p-7">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <p class="theme-kicker">{{ $product['label'] }}</p>
                                <h3 class="theme-display theme-title mt-3 text-2xl font-semibold">
                                    <a href="{{ $product['url'] }}" target="_blank" rel="noopener noreferrer" class="theme-link-strong inline-flex items-center gap-2">
                                        <span>{{ $product['name'] }}</span>
                                        <livewire:socials.link-icon />
                                    </a>
                                </h3>
                            </div>
                            <p class="cyber-log text-[11px]">{{ $product['log'] }}</p>
                        </div>

                        <p class="theme-copy mt-5 text-[15px] leading-8">
                            {{ $product['text'] }}
                        </p>

                        <div class="mt-6 flex flex-wrap gap-2">
                            @foreach ($product['chips'] as $chip)
                                <span class="cyber-pill-muted inline-flex items-center rounded-full px-3 py-1.5 text-[11px] font-medium uppercase tracking-[0.18em]">{{ $chip }}</span>
                            @endforeach
                        </div>

                        <div class="mt-6 rounded-[1.1rem] border p-4" style="border-color: rgba(9, 230, 255, 0.12); background: linear-gradient(180deg, rgba(9, 18, 34, 0.7) 0%, rgba(7, 13, 25, 0.76) 100%);">
                            <p class="cyber-panel-title">{{ $product['signal_title'] }}</p>
                            <p class="theme-copy mt-2 text-sm leading-7">{{ $product['signal_text'] }}</p>
                        </div>

                        <div class="mt-6">
                            <a
                                href="{{ $product['url'] }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="theme-button-secondary inline-flex items-center justify-center rounded-[0.9rem] px-4 py-3 text-xs font-semibold uppercase tracking-[0.14em]"
                            >
                                {{ $projectsUi['visit'] }}
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
