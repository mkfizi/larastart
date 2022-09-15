<x-dashboard-layout pageTitle="{{ __('Buttons') }}">

    {{-- Example --}}
    <div class="mb-4">
        <x-title-sm>{{ __('Example') }} </x-title-sm>
    </div>
    <div class="p-4 mb-8 bg-white rounded-md shadow-md dark:bg-gray-800">

        {{-- Regular --}}
        <div class="mb-4">
            <div class="mb-2">
                <x-text class="font-semibold">{{ __('Regular') }}</x-text>
            </div>
            <x-button type="button">{{ __('Button') }}</x-button>
        </div>

        {{-- Outline --}}
        <div class="mb-4">
            <div class="mb-2">
                <x-text class="font-semibold">{{ __('Outline') }}</x-text>
            </div>
            <x-button-outline type="button">{{ __('Button') }}</x-button-outline>
        </div>

        {{-- Link as a Button --}}
        <div class="mb-4">
            <div class="mb-2">
                <x-text class="font-semibold">{{ __('Link as a Button') }}</x-text>
            </div>
            <x-button-link href="#">{{ __('Button') }}</x-button-link>
        </div>

        {{-- Link as an Outline Button --}}
        <div class="mb-4">
            <div class="mb-2">
                <x-text class="font-semibold">{{ __('Link as an Outline Button') }}</x-text>
            </div>
            <x-button-link-outline href="#">{{ __('Button') }}</x-button-link-outline>
        </div>

        <x-text class="font-semibold">{{ __('Note:' )}}</x-text>
        <x-text>{{ __('Apply ' )}}<code class="px-1 bg-gray-300 dark:bg-gray-500">w-full</code>{{ __(' class to have a full width size.') }}</x-text>
    </div>

    {{-- Disabled --}}
    <div class="mb-4">
        <x-title-sm>{{ __('Disabled') }} </x-title-sm>
    </div>
    <div class="p-4 mb-8 bg-white rounded-md shadow-md dark:bg-gray-800">

        {{-- Regular --}}
        <div class="mb-4">
            <div class="mb-2">
                <x-text class="font-semibold">{{ __('Regular') }}</x-text>
            </div>
            <x-button type="button" disabled>{{ __('Button') }}</x-button>
        </div>

        {{-- Outline --}}
        <div class="mb-4">
            <div class="mb-2">
                <x-text class="font-semibold">{{ __('Outline') }}</x-text>
            </div>
            <x-button-outline disabled>{{ __('Button') }}</x-button-outline>
        </div>

        <x-text class="font-semibold">{{ __('Note:' )}}</x-text>
        <x-text>{{ __('Button using link tag does not have a native ' )}}<code class="px-1 bg-gray-300 dark:bg-gray-500">disabled</code>{{ __(' attribute.') }}</x-text>
    </div>


    {{-- Icons --}}
    <div class="mb-4">
        <x-title-sm>{{ __('Icons') }} </x-title-sm>
    </div>

    <div class="p-4 mb-8 bg-white rounded-md shadow-md dark:bg-gray-800">

        {{-- Left Icon --}}
        <div class="mb-4">
            <div class="mb-2">
                <x-text class="font-semibold">{{ __('Left Icon') }}</x-text>
            </div>
            <x-button type="button">
                <div class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 5v14l12 -7z" />
                        <line x1="20" y1="5" x2="20" y2="19" />
                    </svg>
                    <span>{{ __('Left Icon') }}</span>
                </div>
            </x-button>
        </div>

        {{-- Left Icon --}}
        <div>
            <div class="mb-2">
                <x-text class="font-semibold">{{ __('Right Icon') }}</x-text>
            </div>
            <x-button type="button">
                <div class="flex gap-2">
                    <span>{{ __('Right Icon') }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M20 5v14l-12 -7z" />
                        <line x1="4" y1="5" x2="4" y2="19" />
                    </svg>
                </div>
            </x-button>
        </div>
    </div>

</x-dashboard-layout>