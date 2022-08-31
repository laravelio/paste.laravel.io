<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @unless (request()->is('/'))
        {{-- We don't want to allow indexing of pastes. --}}
        <meta name="robots" content="noindex">
    @endif

    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.querySelector('html').classList.add('dark')
            document.querySelector('html').classList.remove('light')
        } else {
            document.querySelector('html').classList.remove('dark')
            document.querySelector('html').classList.add('light')
        }
    </script>

    <title>Pastebin | Laravel.io</title>

    <link href="https://rsms.me/inter/inter.css" rel="stylesheet">

    @vite(['resources/css/app.scss', 'resources/js/app.js'])

    @include('layouts.favicons')
    @include('layouts.fathom')
</head>
<body class="dark:bg-dark">

@yield('content')

</body>
</html>
