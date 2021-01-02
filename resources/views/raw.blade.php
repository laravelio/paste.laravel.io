<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <title>Pastebin | Laravel.io</title>

    @include('layouts.favicons')
    @include('layouts.fathom')
</head>
<body>
    <pre>{{ $paste->code }}</pre>
</body>
</html>
