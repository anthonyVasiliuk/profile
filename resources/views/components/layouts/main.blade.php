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
</body>
</html>
