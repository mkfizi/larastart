<button {{ 
    $attributes->class([
        'h-10',
        'mb-1',
        'rounded',
        'text-sm',
        'px-6 py-2',
        'text-white',
        'transition',
        'font-semibold',
        'disabled:pointer-events-none',
        'bg-blue-700 hover:bg-blue-600 disabled:bg-blue-400',
        'border border-blue-700 hover:border-blue-600 disabled:border-blue-400',
    ]) 
}}>
    {{ $slot }}
</button>
        