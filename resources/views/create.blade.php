@extends('_layout')

@section('table')
    @include('_sidebar_toggle')

    {!! Form::open(['class' => 'editor-form']) !!}
        <div class="sidebar">
            @include('_logo')

            <div class="options">
                {!! $errors->first('code', '<p>:message</p><br>') !!}
                <ul>
                    <li><input type="submit" value="Save (CMD+S)" class="button"></li>
                    <li><input type="reset" value="Clear" class="button"></li>
                </ul>
            </div>
            <p>Please note that all pasted data is publicly available.</p>
        </div>

        @include('_editor')
    {!! Form::close() !!}
@stop
