<div class="flex items-center flex-shrink-0 px-2">
    <a href="https://laravel.io">
        <img class="w-full dark:hidden" src="{{ asset('images/laravelio.svg') }}" alt="Laravel.io Logo" />
        <img class="w-full hidden dark:inline" src="{{ asset('images/laravelio-white.svg') }}" alt="Laravel.io Logo" />
    </a>
</div>

{!! $errors->first('code', '<p class="mt-8 text-red-600 font-medium">:message</p>') !!}

<nav class="mt-5" aria-label="Sidebar">
    <div class="space-y-1">
        {!! $slot !!}
    </div>
</nav>

<p class="mt-4 text-sm text-gray-500 text-center">
    Please note that all pasted data is publicly available.
</p>

<div class="mt-4 text-center flex-1">
    <button
        type="button" aria-pressed="false"
        class="darkModeToggle bg-gray-300 dark:bg-gray-500 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
    >
        <span class="sr-only">Use setting</span>

        <span class="translate-x-0 dark:translate-x-5 relative inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200">
            <span class="dark:hidden opacity-100 ease-in duration-200 dark:opacity-0 dark:ease-out dark:duration-100 absolute inset-0 h-full w-full flex items-center justify-center transition-opacity" aria-hidden="true">
                <x-heroicon-s-sun class="h-3 w-3 text-gray-400" />
            </span>

            <span class="hidden dark:flex opacity-0 ease-out duration-100 dark:opacity-0 dark:ease-out dark:duration-100 absolute inset-0 h-full w-full items-center justify-center transition-opacity opacity-100 ease-in duration-200 " aria-hidden="true">
                <x-heroicon-s-moon class="h-3 w-3 text-gray-600" />
            </span>
        </span>
    </button>
</div>
