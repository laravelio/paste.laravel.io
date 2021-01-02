<!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
<div :class="{'hidden': !isOpen }">
    <div class="fixed inset-0 flex z-40">
        <!--
          Off-canvas menu overlay, show/hide based on off-canvas menu state.
        -->
        <div class="fixed inset-0">
            <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
        </div>
        <!--
          Off-canvas menu, show/hide based on off-canvas menu state.
        -->
        <div class="flex-1 w-14" aria-hidden="true">
            <!-- Force sidebar to shrink to fit close icon -->
        </div>
        <div tabindex="0" class="origin-top-right relative flex-shrink-0 flex flex-col max-w-xs w-full bg-white focus:outline-none">
            <div class="absolute top-0 left-0 -ml-12 pt-2">
                <button
                    type="button"
                    @click="isOpen = false"
                    class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                >
                    <span class="sr-only">Close sidebar</span>
                    <!-- Heroicon name: x -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                <div class="flex-shrink-0 flex items-center px-6">
                    <a href="https://laravel.io">
                        <img class="w-auto" src="{{ asset('images/laravelio.png') }}" alt="Laravel.io">
                    </a>
                </div>

                {!! $errors->first('code', '<p class="mt-8 px-4 text-red-600 font-medium">:message</p>') !!}

                <nav aria-label="Sidebar" class="mt-5">
                    <div class="px-2 space-y-1">
                        {!! $slot !!}
                    </div>
                </nav>

                <p class="mt-4 px-4 text-sm text-gray-500 flex-1">
                    Please note that all pasted data is publicly available.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Static sidebar for desktop -->
<div :class="{'hidden': !isOpen }" class="lg:flex lg:flex-shrink-0">
    <div class="flex flex-col w-64">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex flex-col h-0 flex-1 border-r border-gray-200 bg-gray-50">
            <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                <div class="flex items-center flex-shrink-0 px-6">
                    <a href="https://laravel.io">
                        <img class="w-auto" src="{{ asset('images/laravelio.png') }}" alt="Laravel.io">
                    </a>
                </div>

                {!! $errors->first('code', '<p class="mt-8 px-4 text-red-600 font-medium">:message</p>') !!}

                <nav class="mt-5" aria-label="Sidebar">
                    <div class="px-2 space-y-1">
                        {!! $slot !!}
                    </div>
                </nav>

                <p class="mt-4 px-4 text-sm text-gray-500 flex-1">
                    Please note that all pasted data is publicly available.
                </p>
            </div>
        </div>
    </div>
</div>
