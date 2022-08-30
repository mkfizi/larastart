@props([
    'tag' => 'h1'
])

@php
    switch ($tag) {
        case 'h1':
            $fontSize = 'text-4xl';
            break;
        case 'h2':
            $fontSize = 'text-3xl';
            break;
        case 'h3':
            $fontSize = 'text-2xl';
            break;
        case 'h4':
            $fontSize = 'text-xl';
            break;
        case 'h5':
            $fontSize = 'text-lg';
            break;
        case 'h5':
        default:
            $fontSize = 'text-base';
            break;
    }
@endphp

<{{ $tag }} {{ 
    $attributes->class([
        'mb-1', 
        $fontSize, 
    ]) 
}}>
    {{ $slot }}
</{{ $tag }} >