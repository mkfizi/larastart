@props([
    'type' => ''
])

@php
    $marginLeft = 'ml-4';
    
    switch ($type) {
        case 'disc':
            $listType = 'list-disc';
            break; 
        case 'decimal':
            $listType = 'list-decimal';
            break; 
        default:
            $listType = null;
            $marginLeft = null;
            break;
    }
@endphp

<ul {{ 
    $attributes->class([
        "mb-1 $marginLeft", 
        $listType,
    ]) 
}}>
    {{ $slot }}
</ul>