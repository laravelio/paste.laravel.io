@if (session('editor_error'))
    <div class="alert alert-danger">
        There was a problem with your paste!
        <ul>
            <li>{{ session('editor_error') }}</li>
        </ul>
    </div>
@endif