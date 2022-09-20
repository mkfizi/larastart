@extends('app')

@section('layout')
    <main class="container px-4 py-16 mx-auto">
        <section class="max-w-md mx-auto mt-48 text-center">
            <div class="mb-2">
                <h1 class="mb-1 text-4xl font-medium">@yield('title')</h1>
            </div>
            <div class="mb-8">
                <p class="mb-1 text-sm">@yield('message')</p>
            </div>

            @if (auth()->user() == null)
                <x-button-link href="{{ route('web.home') }}">{{ __('Return to Home') }}</x-button-link>
            @else
                <x-button-link href="{{ route('dashboard.index') }}">{{ __('Return to Dashboard') }}</x-button-link>
            @endif
        </section>
    </main>
@endsection