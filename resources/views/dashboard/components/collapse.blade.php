<x-dashboard-layout pageTitle="{{ __('Collapse') }}">

    <!-- Regular -->
    <div class="mb-4">
        <x-title-sm>{{ __('Regular') }} </x-title-sm>
    </div>
    <div class="mb-8 overflow-hidden bg-white rounded shadow-md dark:bg-gray-800">

        {{-- Collapse example one --}}
        <x-collapse-show target="collapseExample1">{{ __('Collapse Example One') }}</x-collapse-show>
        <x-collapse-expand id="collapseExample1">
            <p class="mb-1 text-sm">{{ __('Content for collapse example one.') }}</p>
        </x-collapse-expand>
        
        {{-- Collapse example two --}}
        <x-collapse-hide target="collapseExample2" aria-expanded="false">{{ __('Collapse Example Two') }}</x-collapse-hide>
        <x-collapse id="collapseExample2">
            <p class="mb-1 text-sm">{{ __('Content for collapse example two.') }}</p>
        </x-collapse>
        
        {{-- Collapse example three --}}
        <x-collapse-hide target="collapseExample3" aria-expanded="false">{{ __('Collapse Example Three') }}</x-collapse-hide>
        <x-collapse id="collapseExample3">
            <p class="mb-1 text-sm">{{ __('Content for collapse example three.') }}</p>
        </x-collapse>
    </div>
    
    <!-- Accordion -->
    <div class="mb-4">
        <x-title-sm>{{ __('Accordion') }} </x-title-sm>
    </div>
    <div class="mb-8 overflow-hidden bg-white rounded shadow-md dark:bg-gray-800">

        {{-- Accordion example one --}}
        <x-collapse-show target="accordionExample1">{{ __('Accordion Example One') }}</x-collapse-show>
        <x-collapse-expand id="accordionExample1" data-accordion="accordionExample">
            <p class="mb-1 text-sm">{{ __('Content for accordion example one.') }}</p>
        </x-collapse-expand>
        
        {{-- Accordion example two --}}
        <x-collapse-hide target="accordionExample2" aria-expanded="false">{{ __('Accordion Example Two') }}</x-collapse-hide>
        <x-collapse id="accordionExample2" data-accordion="accordionExample">
            <p class="mb-1 text-sm">{{ __('Content for accordion example two.') }}</p>
        </x-collapse>
        
        {{-- Accordion example three --}}
        <x-collapse-hide target="accordionExample3" aria-expanded="false">{{ __('Accordion Example Three') }}</x-collapse-hide>
        <x-collapse id="accordionExample3" data-accordion="accordionExample">
            <p class="mb-1 text-sm">{{ __('Content for accordion example three.') }}</p>
        </x-collapse>
    </div>
</x-dashboard-layout>