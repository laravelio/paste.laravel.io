@extends('layouts.app')

@section('content')
    <div x-data="{ isOpen: false }" class="h-screen flex overflow-hidden">
        <x-main>
            <pre
                class="h-full font-mono text-sm prettyprint linenums selectable" data-line-numbers="true"
            ><code>{{ $paste->code }}</code></pre>
        </x-main>

        <x-nav>
            <x-nav-item label="New" :link="route('home')" icon="heroicon-o-document-add" />
            <x-nav-item label="Fork" :link="route('edit', $paste->hash)" icon="heroicon-o-document-duplicate" />
            <x-nav-item label="Raw" :link="route('raw', $paste->hash)" icon="heroicon-o-external-link" blank />
        </x-nav>
    </div>
@stop
