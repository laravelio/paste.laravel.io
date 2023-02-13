@isset($link)
    <a
        href="{{ $link }}"
        @isset($blank) target="_blank" @endisset
        {{ $attributes->merge(['class' => 'transition ease-in-out duration-150 inline-flex items-center w-full px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-gray-700 dark:text-white bg-gray-200 dark:bg-zinc-900 hover:bg-gray-300 dark:hover:bg-zinc-900/50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500']) }}
    >
        @svg($icon, '-ml-0.5 mr-2 h-4 w-4')

        {{ $label }}
    </a>
@else
    <label class="transition ease-in-out duration-150 inline-flex items-center w-full px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-gray-700 dark:text-white bg-gray-200 dark:bg-zinc-900 hover:bg-gray-300 dark:hover:bg-zinc-900/50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 cursor-pointer">
        @svg($icon, '-ml-0.5 mr-2 h-5 w-5')

        <input type="{{ $type }}" value="{{ $label }}" {{ $attributes->merge(['class' => 'bg-transparent cursor-pointer font-medium']) }} />
    </label>
@endisset
