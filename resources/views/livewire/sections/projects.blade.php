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
            ? 'Собственные продукты, которые я собираю целиком: от идеи и модели данных до интерфейса, интеграций и запуска. У каждого — своя предметная область и пользовательский сценарий.'
            : 'Independent products I build end to end: from the idea and data model to the interface, integrations, and launch. Each has its own domain and user journey.',
        'astry_label' => $isRu ? 'AI-assisted astrology product' : 'AI-assisted astrology product',
        'astry_text' => $isRu
            ? 'AstryHub — продукт с оплатой, AI-чатом, личным кабинетом и двуязычным контентом. Я собрал backend, экранную структуру и логику выдачи так, чтобы сложная тема читалась как нормальный цифровой сервис.'
            : 'AstryHub is a product with payments, an AI chat, account flows, and bilingual content. I built the backend, screen structure, and delivery logic so a complex topic feels like a usable digital product.',
        'astry_signal' => $isRu ? 'Что здесь ценно' : 'Why it matters',
        'astry_signal_text' => $isRu
            ? 'Здесь видны оплата, контентная модель, AI-слой и двуязычная структура. Это рабочий сервис, а не декоративный лендинг.'
            : 'This one shows payments, a real content model, an AI layer, and bilingual structure. It behaves like a product, not a decorative landing page.',
        'instiles_label' => $isRu ? 'Планировщик сетки Instagram' : 'Instagram grid planner',
        'instiles_text' => $isRu
            ? 'Instiles.online — браузерный редактор связанных Instagram-раскладок от 1x3 до 4x3. Он разделяет общую композицию и контент отдельных плиток, показывает реальный вид профиля с обрезкой миниатюр и зазорами и выгружает посты в порядке публикации. Я спроектировал и собрал редактор, логику экспорта и двуязычный сайт.'
            : 'Instiles.online is a browser editor for connected Instagram layouts from 1x3 to 4x3. It separates the shared composition from per-tile content, previews the real profile with thumbnail crops and gaps, and exports posts in publishing order. I designed and built the editor, the export logic, and the bilingual site.',
        'instiles_signal' => $isRu ? 'Что здесь ценно' : 'Why it matters',
        'instiles_signal_text' => $isRu
            ? 'Сложность не в нарезке картинки, а в моделировании того, что реально показывает Instagram: обрезки миниатюр, стыков между плитками и порядка публикации. Это продуктовая логика вокруг реального экрана пользователя, а не простой сплиттер.'
            : 'The hard part is not cutting an image but modelling what Instagram actually shows: thumbnail crops, seams between tiles, and publishing order. It is product logic built around the surface users really see, not a simple splitter.',
        'talkfirst_label' => $isRu ? 'Знакомства через разговор' : 'Dating through conversation',
        'talkfirst_text' => $isRu
            ? 'Talkfirst — сервис знакомств, где первый шаг — ответ на тему дня. Люди читают мысли друг друга, открывают профиль после своего ответа и начинают чат при взаимном интересе. Я собрал продукт с Laravel API, интерфейсом на Next.js и отдельным Go-сервисом для общения в реальном времени.'
            : 'Talkfirst is a dating service where the first step is answering a daily prompt. People read each other’s thoughts, unlock profiles after posting their own answer, and start a chat when interest is mutual. I built the product with a Laravel API, a Next.js interface, and a separate Go service for real-time messaging.',
        'talkfirst_signal_text' => $isRu
            ? 'Правила знакомства и доступ к диалогам связаны с продуктовой логикой. Сообщения хранятся в PostgreSQL, Redis связывает realtime-инстансы и присутствие, а WebSocket доставляет события в браузер.'
            : 'Discovery rules and access to conversations follow the product logic. PostgreSQL stores messages, Redis connects real-time instances and presence, and WebSocket delivers events to the browser.',
        's1doit_label' => $isRu ? 'Проверка продуктовых гипотез' : 'Product idea validation',
        's1doit_text' => $isRu
            ? 's1doit — площадка, где небольшие digital-агентства рассказывают о повторяющихся ручных задачах, а независимые разработчики проверяют решения вместе с будущими пользователями. Каталог проблем, попытки решения и результаты тестов сохраняют общую историю. Я собрал Laravel backend, публичный интерфейс на React и TypeScript и операторскую панель на Filament. Проект запущен в формате пилота.'
            : 's1doit is a platform where small digital agencies share recurring manual tasks and independent developers validate solutions with future users. A problem catalog, solution attempts, and test results preserve a shared history. I built the Laravel backend, the public React and TypeScript interface, and the Filament operator panel. The project is live as a pilot.',
        's1doit_signal_text' => $isRu
            ? 'Проблема сохраняется независимо от судьбы конкретного решения. У каждой попытки есть автор, статус и обновления; результаты тестов и выводы остаются для следующей команды. Модель разделяет участие, попытки и результаты, а оператор проверяет проблемы перед публикацией.'
            : 'A problem persists regardless of what happens to an individual solution. Each attempt has an author, a status, and updates; test results and findings remain for the next team. The model separates participation, attempts, and outcomes, while an operator reviews problems before publication.',
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
        [
            'name' => 'Talkfirst',
            'url' => 'https://talkfirst.chat/',
            'label' => $projectsUi['talkfirst_label'],
            'text' => $projectsUi['talkfirst_text'],
            'signal_title' => $projectsUi['astry_signal'],
            'signal_text' => $projectsUi['talkfirst_signal_text'],
            'log' => 'product://talkfirst',
            'preview' => null,
            'chips' => ['Laravel', 'Next.js', 'Go', 'WebSocket', 'PostgreSQL', 'Redis', 'RU/EN'],
        ],
        [
            'name' => 's1doit.com',
            'url' => 'https://s1doit.com/',
            'label' => $projectsUi['s1doit_label'],
            'text' => $projectsUi['s1doit_text'],
            'signal_title' => $projectsUi['astry_signal'],
            'signal_text' => $projectsUi['s1doit_signal_text'],
            'log' => 'product://s1doit',
            'preview' => null,
            'chips' => ['Laravel', 'React', 'TypeScript', 'Filament', 'PostgreSQL', 'RU/EN'],
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
