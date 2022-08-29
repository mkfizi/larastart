@props([
    'size' => 'sm'
])

@php
    switch ($size) {
        case 'xl':
            $fontSize = 'text-4xl';
            break;
        case 'lg':
            $fontSize = 'text-3xl';
            break;
        case 'md':
            $fontSize = 'text-2xl';
            break;
        case 'sm':
        default:
            $fontSize = 'text-xl';
            break;
    }
@endphp

<p {{ $attributes->class([
    'mb-1', 
    $fontSize, 
    'font-semibold',
])}}>
    {{ $slot }}
</p>