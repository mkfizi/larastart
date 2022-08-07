<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.metadata')
    @include('layouts.partials.open-graph')
    @include('layouts.partials.twitter-card')
    @include('layouts.partials.styles')
    @include('layouts.partials.scripts')
        
    <title>{{ isset($__pageTitle) ? $__pageTitle .' | ' . __('Larastart') : __('Larastart') }}</title>
</head>

<body class="relative min-h-screen antialiased text-gray-900 dark:text-white {{ isset($__backgrounColor) ? $__backgrounColor  : 'bg-white' }} dark:bg-gray-900">
    
    {{-- Page Layout --}}
    @yield('layout')
<body>