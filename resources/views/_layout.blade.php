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

    <link rel="stylesheet" href="{{ asset('legacy/app.css') }}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('legacy/google-code-prettify/tomorrow-night.css') }}" rel="stylesheet">
    <link href="{{ asset('legacy/toastr/toastr.min.css') }}" rel="stylesheet">

    <script src="{{ asset('legacy/custom.modernizr.js') }}"></script>

    @include('_google_analytics')
    @include('_favicons')
</head>
<body class="bin" onload="prettyPrint()">
    <div class="wrapper">
        <div class="table">
            @yield('table')
        </div>
    </div>

    <script src="{{ asset('legacy/jquery.min.js') }}"></script>
    <script src="{{ asset('legacy/jquery-ui-1.10.3.custom.min.js') }}"></script>
    <script src="{{ asset('legacy/mousetrap.min.js') }}"></script>
    <script src="{{ asset('legacy/google-code-prettify/prettify.js') }}"></script>
    <script src="{{ asset('legacy/tabby.js') }}"></script>
    <script src="{{ asset('legacy/zclip.min.js') }}"></script>
    <script src="{{ asset('legacy/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('legacy/bin.js') }}"></script>
</body>
</html>
