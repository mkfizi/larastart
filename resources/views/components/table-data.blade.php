@props([
    'tag' => 'td'
])

@php
    switch ($tag) {
        case 'th':
            $padding = 'p-4';
            break;
        case 'td':
        default:
            $padding = 'px-4 py-3';
            break;
    }
@endphp

<{{ $tag }} {{ 
    $attributes->class([
        'text-sm',
        $padding
    ]) 
}}>
    {{ $slot }}
</{{ $tag }}>