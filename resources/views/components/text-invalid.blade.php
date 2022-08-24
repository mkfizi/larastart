<p {{ 
    $attributes->class([
        'mb-1', 
        'text-xs', 
        'text-red-700 dark:text-red-300'
    ]) 
}}>
    {{ $slot }}
</p>