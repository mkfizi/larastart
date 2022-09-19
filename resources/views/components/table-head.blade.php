<tbody {{ 
    $attributes->class([
        'text-left',
        'bg-gray-100 dark:bg-gray-700 ',
        'border-b border-gray-200 dark:border-gray-800',
    ]) 
}}>
    {{ $slot }}
</tbody>