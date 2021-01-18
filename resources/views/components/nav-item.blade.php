@isset($link)
    <a
        href="{{ $link }}"
        @isset($blank) target="_blank" @endisset
        {{ $attributes->merge(['class' => 'inline-flex items-center w-full px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-gray-700 dark:text-white bg-gray-200 dark:bg-gray-500 hover:bg-gray-300 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500']) }}
    >
        @svg($icon, '-ml-0.5 mr-2 h-4 w-4')

        {{ $label }}
    </a>
@else
    <div class="inline-flex items-center w-full px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-gray-700 dark:text-white bg-gray-200 dark:bg-gray-500 hover:bg-gray-300 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        @svg($icon, '-ml-0.5 mr-2 h-4 w-4')

        <input type="{{ $type }}" value="{{ $label }}" {{ $attributes->merge(['class' => 'bg-transparent cursor-pointer font-medium']) }} />
    </div>
@endisset
