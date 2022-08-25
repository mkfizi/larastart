<a {{ 
    $attributes->class([
        'inline-block',
        'h-10',
        'px-6 py-2',
        'mb-1',
        'text-sm',
        'font-semibold',
        'text-white',
        'transition',
        'bg-blue-700 hover:bg-blue-600',
        'border border-blue-700 hover:border-blue-600',
        'rounded'
    ]) 
}}>
    {{ $slot }}
</a>