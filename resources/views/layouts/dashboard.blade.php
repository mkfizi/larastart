@extends('app')

@section('bgColor', 'bg-gray-50')

@section('layout')
    <div class="flex">

        {{-- Sidebar --}}
        @include('layouts.partials.dashboard.sidebar')

        <div class="w-full">
            
            {{-- Navbar --}}
            @include('layouts.partials.dashboard.navbar')

            {{-- Main Content --}}
            <main class="p-4 mx-auto md:max-w-3xl xl:max-w-5xl lg:px-6">
                <section class="mt-4 mb-16">
                    <div class="mb-4">
                        <x-title-md>
                            @hasSection('title')
                                @yield('title')
                            @endif
                        </x-title-md>
                    </div>

                    {{-- View Github --}}
                    @if(! Route::is('dashboard.blank'))
                        <div class="mb-4">
                            <a href="https://github.com/mkfizi/larastart" target="_blank">
                                <x-alert>
                                    <span class="flex gap-2">
                                        <p>{{ __('View this project on Github') }}</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <line x1="5" y1="12" x2="19" y2="12" />
                                            <line x1="15" y1="16" x2="19" y2="12" />
                                            <line x1="15" y1="8" x2="19" y2="12" />
                                        </svg>
                                    </span>
                                    <div id="githubStars" class="hidden gap-2">
                                        <p id="githubStarsText"></p>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                        </svg>
                                    </div>
                                </x-alert>
                            </a>
                        </div>
                    @endif

                    {{ $slot }}
                    
                </section>
            </main>

            {{-- Footer --}}
            @include('layouts.partials.dashboard.footer')
            
        </div>
    </div>
@endsection

@push('script')
    <script>
        fetch('https://api.github.com/repos/mkfizi/larastart')
            .then(response =>{
                if (!response.ok) {
                    throw new Error('Network response was not OK');
                } 
                return response.json();
            })
            .then(data => {
                document.getElementById("githubStars").classList.remove("hidden");
                document.getElementById("githubStars").classList.add("flex");
                document.getElementById("githubStarsText").innerHTML = data.stargazers_count;
            }).catch(error => {
                console.error('There has been a problem with your fetch operation:', error);
            });
    </script>
@endpush()