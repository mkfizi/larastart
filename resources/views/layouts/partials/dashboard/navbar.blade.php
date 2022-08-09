<nav class="sticky top-0 z-10 flex justify-between w-full p-4 bg-white shadow lg:pr-6 items-between dark:bg-gray-800">
    <div class="flex items-center">

        {{-- Dashboard Sidebar Open Button --}}
        <button type="button" data-target="dashboardSidebar" data-toggle="sidebar" class="lg:hidden stroke-blue-600 fill-blue-600 dark:stroke-blue-400 dark:fill-blue-400 hover:stroke-blue-500 hover:fill-blue-500" aria-controls="dashboardSidebar" aria-label="Open dashboard sidebar">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <line x1="4" y1="6" x2="20" y2="6" />
                <line x1="4" y1="12" x2="20" y2="12" />
                <line x1="4" y1="18" x2="20" y2="18" />
            </svg>
        </button>
    </div>

    <span class="flex items-center justify-between gap-4">
        
        {{-- Dark Mode Toggle --}}
        @include('layouts.partials.dark-mode')

        {{-- Notification Dropdown --}}
        @include('layouts.partials.dashboard.notification')

        {{-- Menu Dropdown --}}
        @include('layouts.partials.dashboard.menu')
    </span>
</nav>