<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark scroll-smooth">
<head>
    @include('partials.head')
</head>
<body class="bg-gray-100 text-gray-900">
@include('partials.header')
<main>
    {{ $slot }}
</main>
@include('partials.footer')
</body>
