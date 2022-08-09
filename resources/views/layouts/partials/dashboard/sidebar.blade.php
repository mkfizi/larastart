@php
    $currentRoute = '/'. Route::current()->uri;
@endphp

{{-- @dd(Route::currentRouteAction(), Route::current(),Route::currentRouteName()) --}}

<aside id="dashboardSidebar" role="dialog" tabindex="-1" class="fixed top-0 z-30 flex flex-col invisible w-64 h-screen overflow-y-auto transition -translate-x-full bg-white lg:visible lg:z-10 dark:bg-gray-800 lg:border-r lg:border-gray-100 lg:dark:border-gray-900 lg:shadow-none lg:sticky shrink-0 lg:translate-x-0 lg:transition-none">
    <div class="flex items-center justify-between px-4 py-5 lg:pl-6">

        {{-- Title --}}
        <a href="{{ route('dashboard.home') }}" class="block text-xl font-bold text-blue-600 transition dark:text-blue-400 hover:text-blue-500">{{ config('larastart.title') }}</a>

        {{-- Dashboard Sidebar Hide Button --}}
        <button type="button" data-target="dashboardSidebar" data-toggle="sidebar" class="transition lg:hidden stroke-blue-600 dark:stroke-blue-400 hover:stroke-blue-500 dark:hover:stroke-blue-500" aria-label="Close dashboard sidebar" aria-controls="dashboardSidebar">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
            </svg>
        </button>
    </div>

    {{-- Dashboard Sidebar Content --}}
    <ul class="h-full overflow-y-auto text-gray-600 dark:text-gray-400">
        @foreach(config('larastart.sidebar') as $item)

            @php
                ($currentRoute == $item['url']) ? $active = true : $active = false;
            @endphp

            @switch($item['type'])

                {{-- Links --}}
                @case('link')
                    @include('layouts.partials.dashboard.sidebar-link', [
                        'active'    => $active,
                        'url'       => $item['url'],
                        'svg'       => $item['svg'],
                        'title'     => $item['title'],
                    ])
                    @break
                
                {{-- Collapsable Links --}}
                @case('collapse')
                    <li>
                        @include('layouts.partials.dashboard.sidebar-collapse', [
                                    'active'    => $active,
                                    'id'        => $item['id'],
                                    'url'       => $item['url'],
                                    'svg'       => $item['svg'],
                                    'title'     => $item['title'],
                                ])
                    </li>

                    {{-- Collapse Content --}}
                    <li>
                        <ul id="{{ $item['id'] }}" tabindex="0" class="overflow-hidden transition-all bg-gray-100 dark:bg-gray-700 {{ ($currentRoute == $item['url']) ? '' : 'invisible h-0'}}">
                            @foreach($item['content'] as $subitem)

                                @php
                                    ($currentRoute == $subitem['url']) ? $active = true : $active = false;
                                @endphp
                                
                                @include('layouts.partials.dashboard.sidebar-link', [
                                    'active'    => $active,
                                    'url'       => $subitem['url'],
                                    'svg'       => $subitem['svg'],
                                    'title'     => $subitem['title'],
                                ])
                            @endforeach
                        </ul>
                    </li>

                    @break
                @default
                    
            @endswitch
        @endforeach
    </ul>
</aside>