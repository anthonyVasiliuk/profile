@php
    /** @var string $locale */
    $isRu = ($locale ?? app()->getLocale()) === 'ru';

    $appUrl = rtrim((string) config('app.url'), '/');
    $webHost = str_replace(['https://', 'http://'], '', $appUrl);
    $showWeb = $webHost !== '' && ! str_contains($webHost, 'localhost') && ! str_contains($webHost, '127.0.0.1');

    $contacts = array_values(array_filter([
        ['label' => 'Email', 'value' => 'anthony.vbrest@gmail.com', 'url' => 'mailto:anthony.vbrest@gmail.com'],
        ['label' => $isRu ? 'Локация' : 'Location', 'value' => $isRu ? 'Беларусь, Брест' : 'Belarus, Brest', 'url' => null],
        ['label' => 'Telegram', 'value' => '@AntonVasiliuk', 'url' => 'https://t.me/AntonVasiliuk'],
        ['label' => 'LinkedIn', 'value' => 'anton-vasilyuk', 'url' => 'https://www.linkedin.com/in/anton-vasilyuk-69baa61a5/'],
        ['label' => 'GitHub', 'value' => 'anthonyVasiliuk', 'url' => 'https://github.com/anthonyVasiliuk/'],
        $showWeb ? ['label' => $isRu ? 'Сайт' : 'Website', 'value' => $webHost, 'url' => $appUrl] : null,
    ]));

    $coreStack = ['PHP', 'Laravel', 'Filament', 'TypeScript', 'JavaScript', 'React', 'MySQL', 'PostgreSQL', 'RESTful APIs', 'Redis', 'Git', 'Docker'];
    $adjacentStack = ['Go', 'Python', 'Livewire', 'Tailwind CSS', 'GraphQL', 'Apache Kafka', 'Elasticsearch', 'Symfony', 'HTML', 'CSS', 'jQuery', 'Bootstrap', 'Backbone.js', 'WordPress'];
    $githubUsername = 'anthonyVasiliuk';
    $githubProfileUrl = 'https://github.com/'.$githubUsername;

    $splitRole = function (string $role): array {
        if (preg_match('/^(.*?)\s*\(([^)]*)\)\s*$/u', $role, $m)) {
            return ['title' => trim($m[1]), 'period' => trim($m[2])];
        }

        return ['title' => trim($role), 'period' => ''];
    };

    $experience = [
        [
            'company' => $isRu ? 'Текущий продукт (NDA)' : 'Current Product (NDA)',
            'role' => $isRu ? 'Senior Backend-разработчик' : 'Senior Backend Developer',
            'period' => $isRu ? '2025 - наст. время' : '2025 - Present',
            'summary' => $isRu
                ? 'Продуктовая backend-роль: поддержка legacy-платформы и постепенный перевод ключевой логики на новый движок без остановки рабочего продукта.'
                : 'Product backend role: keeping a legacy commercial platform stable while migrating its core logic to a new engine without disrupting the live product.',
            'points' => [
                $isRu
                    ? 'Переписал основной backend-движок примерно за три месяца, параллельно поддерживая рабочую legacy-ветку и снимая архитектурные ограничения.'
                    : 'Rebuilt the core backend engine in about three months while supporting the live legacy branch, removing the architectural limits that had been blocking product growth.',
                $isRu
                    ? 'Подключил 8+ внешних провайдеров и 3 биллинговые системы под единым адаптерным слоем с общими ретраями, синхронизацией остатков и provisioning.'
                    : 'Integrated 8+ external providers and 3 billing systems behind one adapter layer with shared retries, stock sync, and provisioning.',
                $isRu
                    ? 'Профилировал тяжёлые API-эндпоинты, запросы к БД и фоновые процессы; после оптимизации сервис стал стабильнее под пиковыми нагрузками.'
                    : 'Profiled heavy API endpoints, database queries, and background jobs; after optimization the service became more stable under peak load.',
            ],
        ],
        [
            'company' => __('global.company_northitgroup'),
            'role' => $splitRole(__('global.role_northitgroup'))['title'],
            'period' => $splitRole(__('global.role_northitgroup'))['period'],
            'summary' => __('global.experience_companies.nitg'),
            'points' => [
                'Warehouseplus - '.__('global.warehouseplus'),
                'Yupinion - '.__('global.yupinion'),
                'Adandra - '.__('global.adandra'),
            ],
        ],
        [
            'company' => __('global.company_sportdata'),
            'role' => $splitRole(__('global.role_sportdata'))['title'],
            'period' => $splitRole(__('global.role_sportdata'))['period'],
            'summary' => __('global.experience_companies.sportdata'),
            'points' => [__('global.sportdata')],
        ],
        [
            'company' => __('global.company_webit'),
            'role' => $splitRole(__('global.role_webit'))['title'],
            'period' => $splitRole(__('global.role_webit'))['period'],
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
            font-size: 9.5px;
            line-height: 1.55;
            color: #273142;
        }
        a { color: inherit; text-decoration: none; }
        .page { padding: 16px 40px 36px; }

        .masthead {
            background-color: #0b1220;
            color: #cbd5e1;
            padding: 24px 40px 18px;
            border-bottom: 3px solid #06b6d4;
        }
        .masthead .name {
            font-size: 23px;
            font-weight: bold;
            color: #ffffff;
            letter-spacing: 0.4px;
        }
        .masthead .position {
            font-size: 11.5px;
            color: #67e8f9;
            margin-top: 2px;
            letter-spacing: 0.3px;
        }
        .masthead .tagline {
            font-size: 8.8px;
            color: #94a3b8;
            margin-top: 4px;
        }
        .contacts { width: 100%; margin-top: 15px; border-collapse: collapse; }
        .contacts td {
            width: 33%;
            padding: 3px 14px 3px 0;
            vertical-align: top;
        }
        .contacts .c-label {
            display: block;
            color: #22d3ee;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            font-size: 6.8px;
            margin-bottom: 1px;
        }
        .contacts .c-value { font-size: 8.8px; color: #e2e8f0; }

        .section { margin-bottom: 15px; }
        .section + .section { margin-top: 2px; }
        .section-title {
            font-size: 10px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1.8px;
            color: #0e7490;
            border-left: 3px solid #06b6d4;
            padding: 1px 0 4px 8px;
            margin-bottom: 8px;
            border-bottom: 1px solid #e6eaf0;
        }
        .summary { font-size: 9.5px; color: #3b4757; }

        .stack-label {
            font-size: 7.4px;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            color: #9aa6b6;
            margin: 7px 0 5px;
        }
        .pill {
            display: inline-block;
            background-color: #ecfeff;
            border: 1px solid #a5f3fc;
            color: #0e7490;
            font-size: 8.4px;
            padding: 2px 7px;
            margin: 0 4px 5px 0;
            border-radius: 3px;
        }
        .pill-muted { background-color: #f5f7fa; border-color: #e2e8f0; color: #51606f; }

        .job { margin-bottom: 11px; }
        .job:last-child { margin-bottom: 0; }
        .job-head { width: 100%; border-collapse: collapse; }
        .job-head .j-left { vertical-align: bottom; }
        .job-head .j-right { vertical-align: bottom; text-align: right; white-space: nowrap; }
        .job-company { font-size: 11px; font-weight: bold; color: #18202c; }
        .job-period { font-size: 8.4px; color: #64748b; }
        .job-role { font-size: 9.2px; color: #0e7490; margin-top: 1px; }
        .job-summary { font-size: 9px; color: #56616f; margin-top: 4px; }
        .job-points { margin-top: 4px; }
        .job-point { font-size: 8.8px; color: #38424f; padding: 1px 0 4px 12px; }
        .job-point .b { color: #06b6d4; font-weight: bold; margin-left: -12px; padding-right: 5px; }

        .edu { font-size: 9.2px; color: #3b4757; }
        .ref-row { font-size: 9.2px; padding: 1.5px 0; }
        .ref-name { font-weight: bold; color: #18202c; }
        .ref-pos { color: #64748b; }
        .ref-note { font-size: 8.2px; color: #9aa6b6; margin-top: 5px; font-style: italic; }
        .github-card {
            border: 1px solid #d7eef3;
            background-color: #f8fcfd;
            padding: 8px 9px 9px;
        }
        .github-head { width: 100%; border-collapse: collapse; margin-bottom: 6px; }
        .github-user { font-size: 9.2px; font-weight: bold; color: #18202c; }
        .github-link { font-size: 8.2px; color: #0e7490; text-align: right; }
        .github-note { font-size: 8px; color: #56616f; margin-top: 5px; }

        .foot {
            margin-top: 16px;
            border-top: 1px solid #e6eaf0;
            padding-top: 7px;
            font-size: 7.4px;
            color: #9aa6b6;
        }
    </style>
</head>
<body>
    <div class="masthead">
        <div class="name">{{ __('global.my_name') }}</div>
        <div class="position">{{ __('global.position') }}</div>
        <div class="tagline">{{ __('global.position_experience', ['years' => $profileExperienceYears]) }}</div>
        <table class="contacts">
            @foreach (array_chunk($contacts, 3) as $row)
                <tr>
                    @foreach ($row as $contact)
                        <td>
                            <span class="c-label">{{ $contact['label'] }}</span>
                            @if ($contact['url'])
                                <a class="c-value" href="{{ $contact['url'] }}">{{ $contact['value'] }}</a>
                            @else
                                <span class="c-value">{{ $contact['value'] }}</span>
                            @endif
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </table>
    </div>

    <div class="page">
        <div class="section">
            <div class="section-title">{{ __('global.cv_summary_title') }}</div>
            <p class="summary">{{ __('global.about_description', ['years' => $profileExperienceYears]) }}</p>
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
            <div class="section-title">GitHub</div>
            <div class="github-card">
                <table class="github-head">
                    <tr>
                        <td class="github-user">{{ $githubUsername }}</td>
                        <td class="github-link"><a href="{{ $githubProfileUrl }}">github.com/{{ $githubUsername }}</a></td>
                    </tr>
                </table>
                <div class="github-note">
                    {{ $isRu ? 'PDF-версия CV не встраивает внешнюю карту коммитов. Актуальная публичная активность доступна в профиле GitHub по ссылке выше; закрытые коммерческие репозитории и NDA-проекты там также не отображаются.' : 'The PDF version does not embed the external contribution chart. Current public activity is available in the GitHub profile linked above; private commercial repositories and NDA projects are not reflected there either.' }}
                </div>
            </div>
        </div>

        <div class="section">
            <div class="section-title">{{ __('global.cv_experience_title') }}</div>
            @foreach ($experience as $job)
                <div class="job">
                    <table class="job-head">
                        <tr>
                            <td class="j-left"><span class="job-company">{{ $job['company'] }}</span></td>
                            <td class="j-right"><span class="job-period">{{ $job['period'] }}</span></td>
                        </tr>
                    </table>
                    <div class="job-role">{{ $job['role'] }}</div>
                    <p class="job-summary">{{ $job['summary'] }}</p>
                    <div class="job-points">
                        @foreach ($job['points'] as $point)
                            <div class="job-point"><span class="b">></span>{{ $point }}</div>
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
                    <span class="ref-name">{{ $ref['name'] }}</span> - <span class="ref-pos">{{ $ref['position'] }}</span>
                </div>
            @endforeach
            <div class="ref-note">{{ __('global.cv_references_note') }}</div>
        </div>

        <div class="foot">
            {{ __('global.my_name') }} · {{ __('global.position') }} · anthony.vbrest@gmail.com · {{ __('global.cv_generated_on') }}: {{ now()->format('Y-m-d') }}
        </div>
    </div>
</body>
</html>
