<button data-target="{{ $id }}" data-toggle="collapse" aria-controls="{{ $id }}" aria-expanded="{{ $active ? 'true' : 'false' }}" class="flex justify-between w-full py-4 pl-6 pr-4 transition hover:text-blue-500">
    <span class="flex gap-4">
        {!! $svg !!}
        <p class="text-sm font-semibold">{{ __($title) }}</p>
    </span>
    <div data-icon="{{ $id }}" class="transition-transform {{ $active ? 'rotate-180' : '' }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <polyline points="6 9 12 15 18 9" />
        </svg>
    </div>
</button>