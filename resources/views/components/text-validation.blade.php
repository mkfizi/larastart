@props([
    'valid' => true
])

@php
    $valid = filter_var($valid, FILTER_VALIDATE_BOOLEAN); 

    $valid
        ? $textColor = 'text-green-700 dark:text-green-300'
        : $textColor = 'text-red-700 dark:text-red-300';
@endphp

<p {{ 
    $attributes->class([
        'mb-1', 
        'text-xs', 
        $textColor
    ]) 
}}>
    {{ $slot }}
</p>