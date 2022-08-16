<a {{ 
    $attributes->class([
        'mb-1', 
        'text-sm', 
        'inline-block', 
        'underline', 
        'text-blue-600 dark:text-blue-400 hover:text-blue-500 dark:hover:text-blue-500', 
        'transition', 
    ]) 
}}>
    {{ $slot }}
</a>