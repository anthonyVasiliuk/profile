<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
@foreach ($localeAlternates as $url)
    <url>
        <loc>{{ $url }}</loc>
@foreach ($localeAlternates as $altLocale => $altUrl)
        <xhtml:link rel="alternate" hreflang="{{ $altLocale }}" href="{{ $altUrl }}" />
@endforeach
        <xhtml:link rel="alternate" hreflang="x-default" href="{{ $localeAlternates['en'] }}" />
    </url>
@endforeach
</urlset>
