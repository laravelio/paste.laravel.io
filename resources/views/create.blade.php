@extends('layouts.app')

@section('content')
    <form action="{{ route('home') }}" method="POST">
        @csrf

        <div x-data="{ isOpen: false }" class="h-screen flex overflow-hidden">
            <x-main>
                @include('_editor', ['padding' => true])
            </x-main>

            <x-nav>
                <x-nav-item id="save" label="Save" type="submit" icon="heroicon-o-folder-plus" />
                <x-nav-item label="Reset" type="reset" icon="iconoir-delete-circle" />
            </x-nav>
        </div>
    </form>
@stop
