<a {{ 
    $attributes->class([
        'h-10',
        'mb-1',
        'rounded',
        'text-sm',
        'px-6 py-2',
        'transition',
        'inline-block',
        'font-semibold',
        'bg-transparent hover:bg-blue-600 dark:hover:bg-blue-600',
        'text-blue-700 dark:text-blue-500 hover:text-white dark:hover:text-white',
        'border border-blue-700 dark:border-blue-500 hover:border-blue-600 dark:hover:border-blue-600',
    ]) 
}}>
    {{ $slot }}
</a>