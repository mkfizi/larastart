<div {{ 
    $attributes->class([
        'p-4',
        'mb-1',
        'gap-4',
        'rounded',
        'text-sm',
        'text-white',
        'bg-blue-700',
        'flex justify-between',
    ]) 
}}>
    {{ $slot }}
</div>