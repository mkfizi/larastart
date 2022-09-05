@props([
    'underline' => false
])

@php
    $underlineClass = '';
    if ($underline == true) {
        $underlineClass = 'underline';
    }
@endphp

<a {{ 
    $attributes->class([
        'mb-1', 
        'text-sm', 
        'inline-block', 
        $underlineClass, 
        'text-blue-600 dark:text-blue-400 hover:text-blue-500 dark:hover:text-blue-500', 
        'transition', 
    ]) 
}}>
    {{ $slot }}
</a>