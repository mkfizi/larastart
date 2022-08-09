<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.metadata')
    @include('layouts.partials.open-graph')
    @include('layouts.partials.twitter-card')
    @include('layouts.partials.styles')
    @include('layouts.partials.scripts')
     
    {{-- If $pageTitle in layout exists --}}
    @if(!empty($attributes['pageTitle']))
        <title>{{ $attributes['pageTitle'] .' | ' . __('Larastart') }}</title>
    @else
        <title>{{ __('Larastart') }}</title>
    @endif
    
</head>

<body class="relative min-h-screen antialiased text-gray-900 dark:text-white {{ isset($bgColor) ? $bgColor  : 'bg-white' }} dark:bg-gray-900">
    
    {{-- Page Layout --}}
    @yield('layout')
<body>