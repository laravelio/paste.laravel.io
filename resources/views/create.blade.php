@extends('layouts.app')

@section('content')
    <form action="{{ route('home') }}" method="POST">
        @csrf

        <div x-data="{ isOpen: false }" class="h-screen flex overflow-hidden">
            <x-main>
                @include('_editor')
            </x-main>

            <x-nav>
                <x-nav-item label="Save" type="submit" icon="heroicon-o-folder-plus" />
                <x-nav-item label="Reset" type="reset" icon="heroicon-o-no-symbol" />
            </x-nav>
        </div>
    </form>
@stop
