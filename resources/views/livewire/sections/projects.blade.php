<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

@php
    $isRu = app()->getLocale() === 'ru';

    $projectsUi = [
        'kicker' => $isRu ? 'Собственные проекты' : 'Own projects',
        'heading' => $isRu ? 'Независимые продукты, где я отвечаю не только за backend' : 'Independent products where I own more than the backend',
        'intro' => $isRu
            ? 'Два живых продукта, которые я собрал целиком: структура продукта, платёжный сценарий, модель контента и путь пользователя от первого экрана до целевого действия.'
            : 'Two live products I built end to end: product structure, payment flow, content model, and the path from first screen to user action.',
        'astry_label' => $isRu ? 'AI-assisted astrology product' : 'AI-assisted astrology product',
        'astry_text' => $isRu
            ? 'AstryHub — продукт с оплатой, AI-чатом, личным кабинетом и двуязычным контентом. Я собрал backend, экранную структуру и логику выдачи так, чтобы сложная тема читалась как нормальный цифровой сервис.'
            : 'AstryHub is a product with payments, an AI chat, account flows, and bilingual content. I built the backend, screen structure, and delivery logic so a complex topic feels like a usable digital product.',
        'astry_signal' => $isRu ? 'Что здесь ценно' : 'Why it matters',
        'astry_signal_text' => $isRu
            ? 'Здесь видны оплата, контентная модель, AI-слой и двуязычная структура. Это рабочий сервис, а не декоративный лендинг.'
            : 'This one shows payments, a real content model, an AI layer, and bilingual structure. It behaves like a product, not a decorative landing page.',
        'instiles_label' => $isRu ? 'Independent storefront project' : 'Independent storefront project',
        'instiles_text' => $isRu
            ? 'Instiles.online — витринный ecommerce-проект, где я собираю каталог, экранную логику и путь пользователя от первого блока до заявки.'
            : 'Instiles.online is a storefront-style ecommerce project where I shape the catalog, screen logic, and the user path from first block to inquiry.',
        'instiles_signal' => $isRu ? 'Что здесь ценно' : 'Why it matters',
        'instiles_signal_text' => $isRu
            ? 'Показывает, что я думаю не только про backend, но и про то, как продукт объясняет ассортимент и доводит пользователя до действия.'
            : 'It shows that I care not only about backend logic, but also about how a product explains the catalog and leads the user to action.',
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
            // No screenshot yet: astryhub.com blocks automated captures. Previews render once every product has one.
            'preview' => null,
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
            'preview' => 'instiles-'.($isRu ? 'ru' : 'en').'.webp',
            'chips' => $isRu ? ['Редактор-холст', 'Превью профиля', 'Экспорт со стыками', '1×3 – 4×3', 'RU/EN'] : ['Canvas editor', 'Profile preview', 'Seam-aware export', '1×3 – 4×3', 'RU/EN'],
        ],
    ];

    $showPreviews = collect($products)->every(fn ($product) => $product['preview'] !== null);
@endphp

<section id="projects" class="cyber-section cyber-section-projects relative overflow-hidden bg-[var(--page-bg-alt)] py-16 sm:py-24 lg:py-28">
    <div class="absolute inset-0 -z-10" style="background-image: radial-gradient(circle at 15% 22%, rgba(9, 230, 255, 0.05), transparent 24%), radial-gradient(circle at 82% 18%, rgba(126, 87, 255, 0.07), transparent 28%);"></div>
    <div class="mx-auto max-w-7xl px-4 sm:px-6">
        <div class="cyber-panel-shell mobile-flat rounded-[1.95rem] p-8 sm:p-10">
            <div class="max-w-3xl">
                <div class="flex items-center justify-between gap-4">
                    <p class="theme-kicker">{{ $projectsUi['kicker'] }}</p>
                    <p class="cyber-log hidden text-[11px] sm:block">lab://independent-products</p>
                </div>
                <h2 class="theme-display theme-title mt-5 text-3xl font-semibold tracking-tight sm:text-[2.95rem]">
                    {{ $projectsUi['heading'] }}
                </h2>
                <p class="theme-lead mt-6 max-w-[60ch]">
                    {{ $projectsUi['intro'] }}
                </p>
            </div>

            <div class="cyber-divider mt-8"></div>

            <div class="mt-8 grid gap-6 xl:grid-cols-2">
                @foreach ($products as $product)
                    <article class="theme-card-muted theme-card-interactive min-w-0 rounded-[1.5rem] p-5 sm:rounded-[1.7rem] sm:p-7">
                        @if ($showPreviews)
                            <a href="{{ $product['url'] }}" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-hidden="true" class="cyber-project-preview mb-6 block overflow-hidden rounded-[1.1rem]">
                                <img src="{{ Vite::asset('resources/images/projects/'.$product['preview']) }}" alt="" loading="lazy" decoding="async" width="960" height="467" class="block h-auto w-full">
                            </a>
                        @endif
                        <div class="flex items-start justify-between gap-4">
                            <div class="min-w-0">
                                <p class="theme-kicker">{{ $product['label'] }}</p>
                                <h3 class="theme-display theme-title mt-3 text-2xl font-semibold">
                                    <a href="{{ $product['url'] }}" target="_blank" rel="noopener noreferrer" class="theme-link-strong inline-flex items-center gap-2">
                                        <span>{{ $product['name'] }}</span>
                                        <livewire:socials.link-icon />
                                    </a>
                                </h3>
                            </div>
                            <p class="cyber-log hidden text-[11px] sm:block">{{ $product['log'] }}</p>
                        </div>

                        <p class="theme-copy mt-5 text-[15px] leading-8">
                            {{ $product['text'] }}
                        </p>

                        <div class="mt-6 flex flex-wrap gap-2">
                            @foreach ($product['chips'] as $chip)
                                <span class="cyber-pill-muted inline-flex items-center rounded-full px-3 py-1.5 text-[11px] font-medium uppercase tracking-[0.18em]">{{ $chip }}</span>
                            @endforeach
                        </div>

                        <div class="cyber-signal-box mobile-soft mt-6 rounded-[1.1rem] p-4">
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
