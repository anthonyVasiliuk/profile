@php
    /** @var string $locale */
    $isRu = ($locale ?? app()->getLocale()) === 'ru';

    $contacts = [
        ['label' => 'Telegram', 'value' => '@AntonVasiliuk', 'url' => 'https://t.me/AntonVasiliuk'],
        ['label' => 'LinkedIn', 'value' => 'anton-vasilyuk', 'url' => 'https://www.linkedin.com/in/anton-vasilyuk-69baa61a5/'],
        ['label' => 'GitHub', 'value' => 'anthonyVasiliuk', 'url' => 'https://github.com/anthonyVasiliuk/'],
        ['label' => 'Web', 'value' => str_replace(['https://', 'http://'], '', rtrim(config('app.url'), '/')), 'url' => config('app.url')],
    ];

    $coreStack = ['PHP', 'Laravel', 'JavaScript', 'jQuery', 'MySQL', 'PostgreSQL', 'CSS', 'RESTful APIs', 'HTML', 'React', 'Git', 'Docker'];
    $adjacentStack = ['Symfony', 'Elasticsearch', 'GraphQL', 'Livewire', 'Apache Kafka', 'Tailwind CSS', 'Redis', 'Bootstrap', 'WordPress', 'Backbone.js', 'Go', 'Python'];

    $experience = [
        [
            'company' => 'Proxyma / Prosox',
            'role' => $isRu ? 'Senior Backend-разработчик (2025 - настоящее время)' : 'Senior Backend Developer (2025 - Present)',
            'summary' => $isRu
                ? 'Продуктовая backend-роль с фокусом на поддержку legacy-платформы продажи прокси и постепенный перевод ключевой логики на новый движок без остановки рабочего продукта.'
                : 'Product backend role focused on keeping a legacy proxy-sales platform stable while migrating its core logic to a new engine without disrupting the live product.',
            'points' => [
                $isRu
                    ? 'Переписал основной backend-движок за 3 месяца, параллельно поддерживая legacy-ветку: ускорил выпуск изменений примерно на 40% и снял ключевые архитектурные ограничения.'
                    : 'Rebuilt the core backend engine in 3 months while supporting the live legacy branch, improving delivery speed by roughly 40% and removing several hard architectural limits.',
                $isRu
                    ? 'Подключил 8+ провайдеров прокси и 3 платёжные системы, унифицировал адаптеры, ретраи и синхронизацию остатков — время интеграции нового провайдера снизилось примерно на 60%.'
                    : 'Integrated 8+ proxy providers and 3 payment systems, standardizing adapters, retries, and stock sync, reducing new-provider rollout time by about 60%.',
                $isRu
                    ? 'Оптимизировал тяжёлые API-эндпоинты, запросы к БД и кеширование — среднее время ответа упало примерно на 35%, ошибки под пиковой нагрузкой — примерно на 30%.'
                    : 'Optimized heavy API endpoints, database queries, and caching, cutting average response time by about 35% and peak-load errors by roughly 30%.',
            ],
        ],
        [
            'company' => __('global.company_northitgroup'),
            'role' => __('global.role_northitgroup'),
            'summary' => __('global.experience_companies.nitg'),
            'points' => [
                'Warehouseplus — '.__('global.warehouseplus'),
                'Yupinion — '.__('global.yupinion'),
                'Adandra — '.__('global.adandra'),
            ],
        ],
        [
            'company' => __('global.company_sportdata'),
            'role' => __('global.role_sportdata'),
            'summary' => __('global.experience_companies.sportdata'),
            'points' => [__('global.sportdata')],
        ],
        [
            'company' => __('global.company_webit'),
            'role' => __('global.role_webit'),
            'summary' => __('global.experience_companies.webit'),
            'points' => [__('global.webit')],
        ],
    ];

    $references = [
        ['name' => __('global.person_1_name'), 'position' => __('global.person_1_position')],
        ['name' => __('global.person_2_name'), 'position' => __('global.person_2_position')],
        ['name' => __('global.person_3_name'), 'position' => __('global.person_3_position')],
    ];
@endphp
<!DOCTYPE html>
<html lang="{{ $isRu ? 'ru' : 'en' }}">
<head>
    <meta charset="utf-8">
    <style>
        @page { margin: 0; }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'DejaVu Sans', sans-serif;
            font-size: 10px;
            line-height: 1.5;
            color: #1f2937;
        }
        .page { padding: 0 34px 34px; }

        .masthead {
            background-color: #0b1220;
            color: #e5e7eb;
            padding: 26px 34px 22px;
            margin-bottom: 18px;
            border-bottom: 3px solid #06b6d4;
        }
        .masthead .name {
            font-size: 24px;
            font-weight: bold;
            color: #ffffff;
            letter-spacing: 0.5px;
        }
        .masthead .name .accent { color: #22d3ee; }
        .masthead .position {
            font-size: 12px;
            color: #67e8f9;
            margin-top: 3px;
        }
        .masthead .tagline {
            font-size: 9.5px;
            color: #9ca3af;
            margin-top: 5px;
        }
        .contacts { width: 100%; margin-top: 14px; border-collapse: collapse; }
        .contacts td {
            width: 25%;
            font-size: 9px;
            color: #cbd5e1;
            vertical-align: top;
            padding-right: 10px;
        }
        .contacts .c-label {
            color: #22d3ee;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 7.5px;
            display: block;
            margin-bottom: 2px;
        }
        .contacts a { color: #e5e7eb; text-decoration: none; }

        .section { margin-bottom: 16px; }
        .section-title {
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #0e7490;
            border-bottom: 1px solid #e5e7eb;
            padding: 0 0 4px 8px;
            border-left: 3px solid #06b6d4;
            margin-bottom: 9px;
        }
        .summary { font-size: 10px; color: #374151; text-align: justify; }

        .pill {
            display: inline-block;
            background-color: #ecfeff;
            border: 1px solid #a5f3fc;
            color: #0e7490;
            font-size: 8.5px;
            padding: 2px 7px;
            margin: 0 3px 4px 0;
            border-radius: 3px;
        }
        .pill-muted {
            background-color: #f8fafc;
            border-color: #e2e8f0;
            color: #475569;
        }
        .stack-label {
            font-size: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #94a3b8;
            margin: 6px 0 4px;
        }

        .job { margin-bottom: 12px; }
        .job-head { width: 100%; border-collapse: collapse; }
        .job-company { font-size: 11.5px; font-weight: bold; color: #111827; }
        .job-role { font-size: 9.5px; color: #0e7490; padding-top: 1px; }
        .job-summary { font-size: 9.5px; color: #4b5563; margin-top: 4px; text-align: justify; }
        .job-points { margin-top: 5px; }
        .job-point {
            font-size: 9px;
            color: #374151;
            padding: 1px 0 4px 12px;
            text-align: justify;
        }
        .job-point .bullet { color: #06b6d4; font-weight: bold; }

        .edu { font-size: 9.5px; color: #374151; }
        .ref-row { font-size: 9.5px; padding: 2px 0; }
        .ref-name { font-weight: bold; color: #111827; }
        .ref-pos { color: #6b7280; }
        .ref-note { font-size: 8.5px; color: #94a3b8; margin-top: 5px; font-style: italic; }

        .foot {
            margin-top: 14px;
            border-top: 1px solid #e5e7eb;
            padding-top: 6px;
            font-size: 7.5px;
            color: #9ca3af;
        }
    </style>
</head>
<body>
    <div class="masthead">
        <div class="name">{{ __('global.my_name') }}<span class="accent">_</span></div>
        <div class="position">{{ __('global.position') }}</div>
        <div class="tagline">{{ __('global.position_experience') }}</div>
        <table class="contacts">
            <tr>
                @foreach ($contacts as $contact)
                    <td>
                        <span class="c-label">{{ $contact['label'] }}</span>
                        <a href="{{ $contact['url'] }}">{{ $contact['value'] }}</a>
                    </td>
                @endforeach
            </tr>
        </table>
    </div>

    <div class="page">
        <div class="section">
            <div class="section-title">{{ __('global.cv_summary_title') }}</div>
            <p class="summary">{{ __('global.about_description') }}</p>
        </div>

        <div class="section">
            <div class="section-title">{{ __('global.cv_skills_title') }}</div>
            <div class="stack-label">{{ __('global.cv_core_stack') }}</div>
            @foreach ($coreStack as $skill)
                <span class="pill">{{ $skill }}</span>
            @endforeach
            <div class="stack-label">{{ __('global.cv_adjacent_stack') }}</div>
            @foreach ($adjacentStack as $skill)
                <span class="pill pill-muted">{{ $skill }}</span>
            @endforeach
        </div>

        <div class="section">
            <div class="section-title">{{ __('global.cv_experience_title') }}</div>
            @foreach ($experience as $job)
                <div class="job">
                    <table class="job-head">
                        <tr>
                            <td><span class="job-company">{{ $job['company'] }}</span></td>
                        </tr>
                        <tr>
                            <td><div class="job-role">{{ $job['role'] }}</div></td>
                        </tr>
                    </table>
                    <p class="job-summary">{{ $job['summary'] }}</p>
                    <div class="job-points">
                        @foreach ($job['points'] as $point)
                            <div class="job-point"><span class="bullet">›</span> {{ $point }}</div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <div class="section">
            <div class="section-title">{{ __('global.cv_education_title') }}</div>
            <p class="edu">{{ __('global.education_description') }}</p>
        </div>

        <div class="section">
            <div class="section-title">{{ __('global.cv_references_title') }}</div>
            @foreach ($references as $ref)
                <div class="ref-row">
                    <span class="ref-name">{{ $ref['name'] }}</span> — <span class="ref-pos">{{ $ref['position'] }}</span>
                </div>
            @endforeach
            <div class="ref-note">{{ __('global.cv_references_note') }}</div>
        </div>

        <div class="foot">
            {{ __('global.my_name') }} · {{ __('global.position') }} · {{ __('global.cv_generated_on') }}: {{ now()->format('Y-m-d') }} · {{ str_replace(['https://', 'http://'], '', rtrim(config('app.url'), '/')) }}
        </div>
    </div>
</body>
</html>
