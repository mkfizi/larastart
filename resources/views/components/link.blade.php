@props([
    'underline' => false
])

@php
    $underline = filter_var($underline, FILTER_VALIDATE_BOOLEAN); 

    $underlineClass = '';
    if ($underline) {
        $underlineClass = 'underline';
    }
@endphp

<a {{ 
    $attributes->class([
        'mb-1', 
        'text-sm', 
        'inline-block', 
        'text-blue-600 dark:text-blue-400 hover:text-blue-500 dark:hover:text-blue-500', 
        'transition', 
        $underlineClass, 
    ]) 
}}>
    {{ $slot }}
</a>