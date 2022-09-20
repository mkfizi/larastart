<x-default-layout pageTitle="{{ __('Page Not Found') }}">
    <div class="mb-2">
        <h1 class="mb-1 text-4xl font-medium">{{ __('Page Not Found') }}</h1>
    </div>
    <div class="mb-8">
        <p class="mb-1 text-sm">{{ __('The page you were trying to view does not exist.') }}</p>
    </div>
    <x-button-link href="{{ route('dashboard.index' )}}">{{ __('Return to Home') }}</x-button-link>
</x-default-layout>