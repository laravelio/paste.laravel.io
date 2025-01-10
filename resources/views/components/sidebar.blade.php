<div class="flex items-center shrink-0 px-2">
    <a href="https://laravel.io">
        <img class="w-full h-16 dark:hidden" src="{{ asset('images/laravelio.svg') }}" alt="Laravel.io Logo" />
        <img class="w-full h-16 hidden dark:inline" src="{{ asset('images/laravelio-white.svg') }}" alt="Laravel.io Logo" />
    </a>
</div>

{!! $errors->first('code', '<p class="mt-4 text-red-600 font-medium text-center">:message</p>') !!}

<nav class="mt-4" aria-label="Sidebar">
    <div class="space-y-1">
        {!! $slot !!}
    </div>
</nav>

<p class="mt-4 text-sm text-gray-500 text-center">
    Please note that all pasted data is publicly available.
</p>

<div class="mt-4 flex justify-center space-x-4">
    <a href="https://x.com/laravelio" class="text-gray-400 hover:text-gray-500">
        <span class="sr-only">X (fomerly Twitter)</span>
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 48 48" width="48px" height="48px" clip-rule="evenodd" baseProfile="basic" aria-hidden="true">
            <path  fill-rule="evenodd" d="M38,42H10c-2.209,0-4-1.791-4-4V10c0-2.209,1.791-4,4-4h28	c2.209,0,4,1.791,4,4v28C42,40.209,40.209,42,38,42z" clip-rule="evenodd"/><path fill="#fff" d="M34.257,34h-6.437L13.829,14h6.437L34.257,34z M28.587,32.304h2.563L19.499,15.696h-2.563 L28.587,32.304z"/><polygon fill="#fff" points="15.866,34 23.069,25.656 22.127,24.407 13.823,34"/><polygon fill="#fff" points="24.45,21.721 25.355,23.01 33.136,14 31.136,14"/>
        </svg>
    </a>

    <a href="https://github.com/laravelio" class="text-gray-400 hover:text-gray-500">
        <span class="sr-only">GitHub</span>
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
        </svg>
    </a>
</div>

<div class="grow"></div>

<div class="mt-4 text-center">
    <button
        type="button" aria-pressed="false"
        class="darkModeToggle bg-gray-300 dark:bg-gray-500 relative inline-flex shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
    >
        <span class="sr-only">Use setting</span>

        <span class="translate-x-0 dark:translate-x-5 relative inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200">
            <span class="dark:hidden opacity-100 ease-in duration-200 dark:opacity-0 dark:ease-out dark:duration-100 absolute inset-0 h-full w-full flex items-center justify-center transition-opacity" aria-hidden="true">
                <x-heroicon-s-sun class="h-3 w-3 text-gray-400" />
            </span>

            <span class="hidden dark:flex opacity-0 ease-out duration-100 dark:opacity-100 dark:ease-in dark:duration-200 absolute inset-0 h-full w-full items-center justify-center transition-opacity" aria-hidden="true">
                <x-heroicon-s-moon class="h-3 w-3 text-gray-600" />
            </span>
        </span>
    </button>
</div>
