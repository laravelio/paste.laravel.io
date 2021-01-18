<!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
<div class="print:hidden" :class="{'hidden': !isOpen }">
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
        <div tabindex="0" class="origin-top-right relative flex-shrink-0 flex flex-col max-w-xs w-full bg-gray-50 dark:bg-gray-700 focus:outline-none">
            <div class="absolute top-0 left-0 -ml-12 pt-2">
                <button
                    type="button"
                    @click="isOpen = false"
                    class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                >
                    <span class="sr-only">Close sidebar</span>

                    <x-heroicon-o-x class="h-6 w-6 text-white" />
                </button>
            </div>
            <div class="flex-1 h-0 pt-8 pb-4 px-6 overflow-y-auto">
                <x-sidebar>{!! $slot !!}</x-sidebar>
            </div>
        </div>
    </div>
</div>

<!-- Static sidebar for desktop -->
<div :class="{'hidden': !isOpen }" class="lg:flex lg:flex-shrink-0 print:hidden">
    <div class="flex flex-col w-64">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex flex-col h-0 flex-1 border-r border-gray-200 dark:border-gray-900 bg-gray-50 dark:bg-gray-700">
            <div class="flex-1 flex flex-col pt-8 pb-4 px-6 overflow-y-auto">
                <x-sidebar>{!! $slot !!}</x-sidebar>
            </div>
        </div>
    </div>
</div>
