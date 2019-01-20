@extends('_layout')

@section('table')
    @include('_sidebar_toggle')

    <div class="sidebar">
        @include('_logo')

        <div class="options">
            <ul>
                <li><a href="{{ route('home') }}" class="button new">New (N)</a></li>
                <li><a href="{{ route('edit', $paste->hash) }}" class="button fork">Fork (F)</a></li>
                <li><a target="_blank" href="{{ route('raw', $paste->hash) }}" class="button raw">Raw (R)</a></li>
            </ul>
        </div>
        <p>Please note that all pasted data is publicly available.</p>
    </div>

    <div class="show-container">
        <pre class="prettyprint linenums selectable">
{{ $paste->code }}
        </pre>
    </div>
@stop
