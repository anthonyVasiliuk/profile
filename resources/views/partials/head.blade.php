<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="{{ $description ?? __('global.seo_description', ['years' => $profileExperienceYears]) }}" />
<meta name="theme-color" content="#050816" />

<title>{{ $title ?? __('global.my_name') }}</title>

<meta property="og:title" content="{{ $title ?? __('global.my_name') }}" />
<meta property="og:description" content="{{ $description ?? __('global.seo_description', ['years' => $profileExperienceYears]) }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta name="twitter:card" content="summary_large_image" />
<link rel="canonical" href="{{ url()->current() }}" />

<link rel="icon" href="{{ Vite::asset('resources/images/favicon.png') }}" />
<link rel="preload" as="image" href="{{ Vite::asset('resources/images/backgrounds/bg.jpg') }}" fetchpriority="high" />
<link rel="dns-prefetch" href="//fonts.bunny.net" />
<link rel="dns-prefetch" href="//www.clarity.ms" />
<link rel="preconnect" href="https://fonts.bunny.net" crossorigin>
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700|sora:600,700" rel="stylesheet" />

<script type="text/javascript">
    (function(c, l, a, r, i, t, y) {
        c[a] = c[a] || function() {
            (c[a].q = c[a].q || []).push(arguments);
        };
        t = l.createElement(r);
        t.async = 1;
        t.src = "https://www.clarity.ms/tag/" + i;
        y = l.getElementsByTagName(r)[0];
        y.parentNode.insertBefore(t, y);
    })(window, document, "clarity", "script", "ww9aofpe65");
</script>

@vite(['resources/css/app.css', 'resources/js/app.js'])
@livewireStyles
