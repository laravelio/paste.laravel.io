@extends('layouts.app')

@section('content')
    <form action="{{ route('edit', $paste) }}" method="POST">
        @csrf

        <div x-data="{ isOpen: false }" class="h-screen flex overflow-hidden">
            <x-main>
                @include('_editor', ['padding' => true])
            </x-main>

            <x-nav>
                <x-nav-item label="Save" type="submit" icon="heroicon-o-folder-plus" />
                <x-nav-item label="Reset" type="reset" icon="iconoir-delete-circle" />
                <x-nav-item label="Back" :link="route('show', $paste->hash)" icon="heroicon-o-arrow-left-circle" />
            </x-nav>
        </div>
    </form>
@stop
