<div class="flex flex-col min-w-0 flex-1 overflow-hidden">
    <div class="lg:hidden">
        <div class="flex items-center justify-between bg-gray-50 border-b border-gray-200 px-4 py-1.5">
            <div>
                <a href="{{ route('home') }}">
                    <img class="h-8 w-auto" src="{{ asset('images/laravelio-icon.svg') }}" alt="Laravel.io">
                </a>
            </div>
            <div>
                <button
                    type="button"
                    @click="isOpen = true"
                    class="-mr-3 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900"
                >
                    <span class="sr-only">Open sidebar</span>
                    <!-- Heroicon name: menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="flex-1 relative z-0 flex overflow-hidden">
        <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
            <!-- Start main area-->
            <div class="absolute inset-0 py-6 px-4 sm:px-6 lg:px-8">
                {!! $slot !!}
            </div>
            <!-- End main area -->
        </main>
    </div>
</div>