@extends('_layout')

@section('table')
    @include('_sidebar_toggle')

    <form action="{{ route('edit', $paste) }}" method="POST" class="editor-form">
        {!! csrf_field() !!}

        <div class="sidebar create">
            @include('_logo')

            <div class="options">
                {!! $errors->first('code', '<p>:message</p><br>') !!}
                <ul>
                    <li><input type="submit" value="Save (CMD/CTRL+S)" class="button"></li>
                    <li><input type="reset" value="Clear" class="button"></li>
                    <li>
                        <a href="{{ route('show', $paste->hash) }}" class="button back">
                            <i class="fa fa-arrow-circle-o-left"></i> Back
                        </a>
                    </li>
                </ul>
            </div>
            <p>Please note that all pasted data is publicly available.</p>
        </div>

        @include('_editor')
    </form>
@stop
