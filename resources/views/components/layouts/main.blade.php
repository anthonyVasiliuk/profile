<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-[var(--page-bg)] text-[var(--text)] antialiased selection:bg-[var(--accent-soft)] selection:text-[var(--heading)]" id="top">
@include('partials.header')
<main class="relative overflow-x-hidden">
    {{ $slot }}
</main>
@include('partials.footer')
@livewireScripts
<script
    src="https://app.luanexa.com/external-chat-widget.js"
    data-api-url="https://api-app.luanexa.com/channels_client/website"
    data-project-id="6ac161d86ae69e7ba75a2353"
    data-channel-id="6ac1650be55a826e8ae1f11e"
    defer
></script>
</body>
</html>
