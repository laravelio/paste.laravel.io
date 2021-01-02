<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @unless (request()->is('/'))
        {{-- We don't want to allow indexing of pastes. --}}
        <meta name="robots" content="noindex">
    @endif

    <title>Pastebin | Laravel.io</title>

    <link href="https://rsms.me/inter/inter.css" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @include('_favicons')
    @include('_fathom')
</head>
<body>

</body>
</html>
