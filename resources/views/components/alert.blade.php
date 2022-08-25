@props([
    'id' => null
])

<div id="{{ $id }}" class="flex justify-between gap-4 p-4 mb-1 text-sm text-white bg-blue-700 rounded">
    {{ $slot }}
    @if($id != null)
        <button data-toggle="alert" data-target="{{ $id }}" aria-label="{{ __('Close alert') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="transition stroke-white" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
            </svg>
        </button>
    @endif
</div>