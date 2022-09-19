<button data-target="{{ $target ?? '' }}" data-toggle="collapse" aria-expanded="false" aria-controls="{{ $target ?? '' }}" {{ 
    $attributes->class([
        'p-4',
        'w-full',
        'bg-gray-100',
        'dark:bg-gray-700',
        'flex justify-between',
        'border-b border-gray-200 dark:border-gray-800',
    ]) 
}}>
    <p class="text-sm font-semibold">
        {{ $slot }}
    </p>
    <div data-icon="collapseExample2" class="transition-transform">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <polyline points="6 9 12 15 18 9" />
        </svg>
    </div>
</button>