<x-dashboard-layout pageTitle="{{ __('Typography') }}">

    {{-- Styles --}}
    <div class="mb-4">
        <x-title-sm>{{ __('Styles') }} </x-title-sm>
    </div>
    <div class="p-4 mb-8 bg-white rounded-md shadow-md dark:bg-gray-800">
        <x-text>{{ __('Font: Poppins') }}</x-text>
        <x-text>{{ __('This is a regular text.') }}</x-text>
        <x-text><em>{{ __('This is an italic text.') }}</em></x-text>
        <x-text><strong>{{ __('This is a bold text.') }}</strong></x-text>
    </div>

    {{-- Titles --}}
    <div class="mb-4">
        <x-title-sm>{{ __('Titles') }} </x-title-sm>
    </div>
    <div class="p-4 mb-8 bg-white rounded-md shadow-md dark:bg-gray-800">
        <x-title-xl>{{ __('Extra Large Title') }}</x-title-xl>
        <x-title-lg>{{ __('Large Title') }}</x-title-lg>
        <x-title-md>{{ __('Medium Title') }}</x-title-md>
        <x-title-sm>{{ __('Small Title') }}</x-title-sm>
    </div>

    {{-- Headings --}}
    <div class="mb-4">
        <x-title-sm>{{ __('Headings') }} </x-title-sm>
    </div>
    <div class="p-4 mb-8 bg-white rounded-md shadow-md dark:bg-gray-800">
        <x-heading-1>{{ __('This is a H1 text.') }}</x-heading-1>
        <x-heading-2>{{ __('This is a H2 text.') }}</x-heading-2>
        <x-heading-3>{{ __('This is a H3 text.') }}</x-heading-3>
        <x-heading-4>{{ __('This is a H4 text.') }}</x-heading-4>
        <x-heading-5>{{ __('This is a H5 text.') }}</x-heading-5>
        <x-heading-6>{{ __('This is a H6 text.') }}</x-heading-6>
    </div>

    {{-- Links --}}
    <div class="mb-4">
        <x-title-sm>{{ __('Links') }} </x-title-sm>
    </div>
    <div class="p-4 mb-8 bg-white rounded-md shadow-md dark:bg-gray-800">
        <x-link href="#">{{ __('This is a link text.') }}</x-link>
        <x-link-underline href="#">{{ __('This is a link text with underline.') }}</x-link-underline>
    </div>

    {{-- Lists --}}
    <div class="mb-4">
        <x-title-sm>{{ __('Lists') }} </x-title-sm>
    </div>
    <div class="p-4 mb-8 bg-white rounded-md shadow-md dark:bg-gray-800">
        <div class="grid gap-4 md:grid-cols-3">
            <div>
                <div class="mb-2">
                    <x-text class="font-semibold">{{ __('Regular List') }}</x-text>
                </div>
                <x-list>
                    <x-list-item>{{ __('First item.') }}</x-list-item>
                    <x-list-item>{{ __('Second item.') }}</x-list-item>
                    <x-list-item>{{ __('Third item.') }}</x-list-item>
                </x-list>
            </div>
            <div>
                <div class="mb-2">
                    <x-text class="font-semibold">{{ __('Disc List') }}</x-text>
                </div>
                <x-list-disc>
                    <x-list-item>{{ __('First item.') }}</x-list-item>
                    <x-list-item>{{ __('Second item.') }}</x-list-item>
                    <x-list-item>{{ __('Third item.') }}</x-list-item>
                </x-list-disc>
            </div>
            <div>
                <div class="mb-2">
                    <x-text class="font-semibold">{{ __('Numbered List') }}</x-text>
                </div>
                <x-list-decimal>
                    <x-list-item>{{ __('First item.') }}</x-list-item>
                    <x-list-item>{{ __('Second item.') }}</x-list-item>
                    <x-list-item>{{ __('Third item.') }}</x-list-item>
                </x-list-decimal>
            </div>
        </div>
    </div>

</x-dashboard-layout>