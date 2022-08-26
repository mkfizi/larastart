<x-dashboard-layout pageTitle="{{ __('Alerts') }}">
    
    {{-- Regular --}}
    <div class="mb-4">
        <x-title-sm>{{ __('Regular') }} </x-title-sm>
    </div>
    <div class="mb-4">

        <x-alert id="alertExample">
            <span>{{ __('This is a regular alert example.') }}</span>
            <x-alert-hide for="alertExample">{{ __('Close alert regular example') }} </x-alert-hide>
        </x-alert>
    </div>

    {{-- Icon --}}
    <div class="mb-4">
        <x-title-sm>{{ __('Icon') }} </x-title-sm>
    </div>
    <div class="mb-4">
        <x-alert id="alertIconExample">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cy="12" r="9" />
                    <line x1="12" y1="8" x2="12" y2="12" />
                    <line x1="12" y1="16" x2="12.01" y2="16" />
                </svg>
                <span>{{ __('This is an alert with icon example.') }}</span>
            </div>
            <x-alert-hide for="alertIconExample">{{ __('Close alert icon example') }} </x-alert-hide>
        </x-alert>
    </div>
</x-dashboard-layout>
