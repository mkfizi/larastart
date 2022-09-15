<a {{ 
    $attributes->class([
        'h-10',
        'mb-1',
        'rounded',
        'text-sm',
        'px-6 py-2',
        'text-white',
        'transition',
        'inline-block',
        'font-semibold',
        'bg-blue-700 hover:bg-blue-600',
        'border border-blue-700 hover:border-blue-600',
    ]) 
}}>
    {{ $slot }}
</a>
        