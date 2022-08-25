<button {{ 
    $attributes->class([
        'h-10', 
        'px-6 py-2',
        'mb-1',
        'text-sm',
        'font-semibold',
        'text-white', 
        'transition',
        'bg-blue-700 hover:bg-blue-600 disabled:bg-blue-400',
        'border border-blue-700 hover:border-blue-600 disabled:border-blue-400',
        'rounded',
        'disabled:pointer-events-none'
    ]) 
}}>
    {{ $slot }}
</button>
        