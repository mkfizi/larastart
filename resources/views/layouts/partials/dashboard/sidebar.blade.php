@php
    $currentRoute   = '/'. Route::current()->uri;
    $currentPrefix  = Route::current()->getPrefix();
@endphp

<aside id="dashboardSidebar" role="dialog" tabindex="-1" class="fixed top-0 z-30 flex flex-col invisible w-64 h-screen overflow-y-auto transition -translate-x-full bg-white lg:visible lg:z-10 dark:bg-gray-800 lg:border-r lg:border-gray-100 lg:dark:border-gray-900 lg:shadow-none lg:sticky shrink-0 lg:translate-x-0 lg:transition-none">
    <div class="flex items-center justify-between px-4 py-5 lg:pl-6">

        {{-- Title --}}
        <a href="{{ route('dashboard.index') }}" class="block text-xl font-bold text-blue-600 transition dark:text-blue-400 hover:text-blue-500">{{ config('larastart.name') }}</a>

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

            @switch($item['type'])

                {{-- Link --}}
                @case('link')

                    @php
                        ($currentRoute == $item['url']) ? $activeRoute = true : $activeRoute = false;
                    @endphp
                    <li>
                        <a href="{{ $item['url'] }}" class="flex w-full gap-4 py-4 pl-6 pr-4 transition {{ $activeRoute ? 'text-blue-600 dark:text-blue-400' : 'hover:text-blue-500' }}">
                            {!! $item['icon'] !!}
                            <p class="text-sm font-semibold">
                                {{ __($item['title']) }}
                            </p>
                        </a>
                    </li>
                    @break
                
                {{-- Collape --}}
                @case('collapse')
                    @php
                        if($currentPrefix == null) {
                            $activePrefix = false;
                        } else {
                            ($currentPrefix == $item['url']) ? $activePrefix = true : $activePrefix = false;
                        }
                    @endphp

                    {{-- Collapse Trigger --}}
                    <li>
                        <button data-target="{{ $item['id'] }}" data-toggle="collapse" aria-controls="{{ $item['id'] }}" aria-expanded="{{ $activePrefix ? 'true' : 'false' }}" class="flex justify-between w-full py-4 pl-6 pr-4 transition hover:text-blue-500">
                            <span class="flex gap-4">
                                {!! $item['icon'] !!}
                                <p class="text-sm font-semibold">{{ __($item['title']) }}</p>
                            </span>
                            <div data-icon="{{ $item['id'] }}" class="transition-transform {{ $activePrefix ? 'rotate-180' : '' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </div>
                        </button>
                    </li>

                    {{-- Collapse Content --}}
                    <li>
                        <ul id="{{ $item['id'] }}" tabindex="0" class="overflow-hidden transition-all bg-gray-100 dark:bg-gray-700 {{ $activePrefix ? '' : 'invisible h-0' }}">
                            @foreach($item['subitems'] as $subitem)

                                @php
                                    ($currentRoute == $subitem['url']) ? $activeRoute = true : $activeRoute = false;
                                @endphp
                                
                                <li>
                                    <a href="{{ $subitem['url'] }}" class="flex w-full gap-4 py-4 pl-6 pr-4 transition {{ $activeRoute ? 'text-blue-600 dark:text-blue-400' : 'hover:text-blue-500' }}">
                                        {!! $subitem['icon'] !!}
                                        <p class="text-sm font-semibold">
                                            {{ __($subitem['title']) }}
                                        </p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    @break
                @default
                    
            @endswitch
        @endforeach
    </ul>
</aside>