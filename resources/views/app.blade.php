<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.metadata')
    @include('layouts.partials.open-graph')
    @include('layouts.partials.twitter-card')
    @include('layouts.partials.styles')
    @include('layouts.partials.scripts')
        
    <title>
        @hasSection('title')
            {{ config('larastart.name') }} | @yield('title')
        @else
            {{ config('larastart.name') }}
        @endif
    </title>
</head>

<body class="relative min-h-screen antialiased text-gray-900 dark:text-white dark:bg-gray-900
    @hasSection('bgColor')
        @yield('bgColor')
    @else
        bg-white
    @endif
">
    
    {{-- Page Layout --}}
    @yield('layout')
<body>