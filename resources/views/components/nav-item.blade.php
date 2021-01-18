@isset($link)
    <a
        href="{{ $link }}"
        class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center py-2 text-base font-medium rounded-md"
        @isset($blank) target="_blank" @endisset
    >
        @svg($icon, 'text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6')

        {{ $label }}
    </a>
@else
    <div class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center py-2 text-base font-medium rounded-md">
        @svg($icon, 'text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6')

        <input type="{{ $type }}" value="{{ $label }}" class="bg-transparent cursor-pointer font-medium" />
    </div>
@endisset
