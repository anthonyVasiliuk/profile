@php
    $locale = app()->getLocale();
    $pageTitle = $title ?? __('global.my_name');
    $pageDescription = $description ?? __('global.seo_description', ['years' => $profileExperienceYears]);
    $ogLocales = ['en' => 'en_US', 'ru' => 'ru_RU'];
    $ogImage = asset("images/og-{$locale}.jpg");
    $ogImageAlt = __('global.my_name').' — '.__('global.position');

    $structuredData = [
        '@context' => 'https://schema.org',
        '@type' => 'ProfilePage',
        'url' => url()->current(),
        'inLanguage' => $locale,
        'mainEntity' => [
            '@type' => 'Person',
            'name' => __('global.my_name'),
            'alternateName' => __('global.my_name', [], $locale === 'ru' ? 'en' : 'ru'),
            'jobTitle' => __('global.position'),
            'description' => $pageDescription,
            'url' => $localeAlternates[$locale] ?? url()->current(),
            'knowsAbout' => ['Laravel', 'PHP', 'REST API', 'SQL', 'PostgreSQL', 'Docker', 'TypeScript', 'Legacy modernization'],
            'sameAs' => [
                'https://www.linkedin.com/in/anton-vasilyuk-69baa61a5/',
                'https://github.com/anthonyVasiliuk',
                'https://t.me/AntonVasiliuk',
            ],
        ],
    ];
@endphp
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="{{ $pageDescription }}" />
<meta name="theme-color" content="#050816" />

<title>{{ $pageTitle }}</title>

<link rel="canonical" href="{{ url()->current() }}" />
@foreach ($localeAlternates as $altLocale => $altUrl)
<link rel="alternate" hreflang="{{ $altLocale }}" href="{{ $altUrl }}" />
@endforeach
<link rel="alternate" hreflang="x-default" href="{{ $localeAlternates['en'] }}" />

<meta property="og:site_name" content="{{ __('global.my_name') }}" />
<meta property="og:title" content="{{ $pageTitle }}" />
<meta property="og:description" content="{{ $pageDescription }}" />
<meta property="og:type" content="profile" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:locale" content="{{ $ogLocales[$locale] ?? 'en_US' }}" />
@foreach (array_diff_key($ogLocales, [$locale => true]) as $altOgLocale)
<meta property="og:locale:alternate" content="{{ $altOgLocale }}" />
@endforeach
<meta property="og:image" content="{{ $ogImage }}" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:image:alt" content="{{ $ogImageAlt }}" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{ $pageTitle }}" />
<meta name="twitter:description" content="{{ $pageDescription }}" />
<meta name="twitter:image" content="{{ $ogImage }}" />
<meta name="twitter:image:alt" content="{{ $ogImageAlt }}" />

<script type="application/ld+json">{!! json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>

<link rel="icon" href="{{ Vite::asset('resources/images/favicon.png') }}" />
<link rel="apple-touch-icon" href="{{ Vite::asset('resources/images/favicon.png') }}" />
<link rel="preload" as="image" href="{{ Vite::asset('resources/images/backgrounds/bg.jpg') }}" fetchpriority="high" />
<link rel="dns-prefetch" href="//fonts.bunny.net" />
<link rel="dns-prefetch" href="//www.clarity.ms" />
<link rel="preconnect" href="https://fonts.bunny.net" crossorigin>
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700|sora:600,700" rel="stylesheet" />

<script type="text/javascript">
    (function(c, l, a, r, i) {
        c[a] = c[a] || function() {
            (c[a].q = c[a].q || []).push(arguments);
        };

        const loadClarity = function() {
            const t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            const y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        };

        c.addEventListener("load", function() {
            if ("requestIdleCallback" in c) {
                c.requestIdleCallback(loadClarity, { timeout: 2000 });
                return;
            }

            c.setTimeout(loadClarity, 1200);
        }, { once: true });
    })(window, document, "clarity", "script", "ww9aofpe65");
</script>

@vite(['resources/css/app.css', 'resources/js/app.js'])
@livewireStyles
