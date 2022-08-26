<div {{ 
    $attributes->class([
        'flex justify-between',
        'gap-4',
        'p-4',
        'mb-1',
        'text-sm',
        'text-white',
        'bg-blue-700',
        'rounded'
    ]) 
}}>
    {{ $slot }}
</div>