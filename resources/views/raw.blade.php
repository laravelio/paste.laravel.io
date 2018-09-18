<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @unless (request()->is('/'))
        {{-- We don't want to allow indexing of pastes. --}}
        <meta name="robots" content="noindex">
    @endif

    <title>Pastebin | Laravel.io</title>

    @include('_google_analytics')
    @include('_favicons')
</head>
<body>
    <pre>{{ $paste->code }}</pre>
</body>
</html>
