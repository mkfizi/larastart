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
            <x-link-button href="#">{{ __('Button') }}</x-link-button>
        </div>

        {{-- Link as an Outline Button --}}
        <div class="mb-4">
            <div class="mb-2">
                <x-text class="font-semibold">{{ __('Link as an Outline Button') }}</x-text>
            </div>
            <x-link-button-outline href="#">{{ __('Button') }}</x-link-button-outline>
        </div>

        <x-text class="font-semibold">{{ __('Note:' )}}</x-text>
        <x-text>{{ __('Apply ' )}}<code class="px-1 bg-gray-300 dark:bg-gray-500">w-full</code>{{ __(' class to have a full width size.') }}</x-text>
    </div>

</x-dashboard-layout>