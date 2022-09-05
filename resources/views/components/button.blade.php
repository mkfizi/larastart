@props([
    'tag'       => 'button',
    'outline'   => false
])

@php
    $display        = null;
    $border         = null;
    $pointerEvents  = null;
    $textColor      = 'text-white';
    $bgColor        = 'bg-transparent hover:bg-blue-600 dark:hover:bg-blue-600';

    $outline = filter_var($outline, FILTER_VALIDATE_BOOLEAN); 

    switch ($tag) {
        case 'link':
            $tag        = 'a';
            $display    = 'inline-block';
    
            if ($outline) { 
                $textColor = 'text-blue-700 dark:text-blue-500 hover:text-white dark:hover:text-white';
                $border = 'border border-blue-700 dark:border-blue-500 hover:border-blue-600 dark:hover:border-blue-600';
            } else {
                $bgColor = 'bg-blue-700 hover:bg-blue-600';
                $border = 'border border-blue-700 hover:border-blue-600';
            }

            break;
        case 'button':
        default:
            $tag = 'button';
            $pointerEvents = 'disabled:pointer-events-none';

            if ($outline) { 
                $textColor = 'text-blue-700 dark:text-blue-500 hover:text-white dark:hover:text-white disabled:text-blue-300 dark:disabled:text-blue-300';
                $border = 'border border-blue-700 dark:border-blue-500 hover:border-blue-600 dark:hover:border-blue-600 disabled:border-blue-300 dark:disabled:border-blue-300';  
            } else {
                $bgColor = 'bg-blue-700 hover:bg-blue-600 disabled:bg-blue-400';
                $border = 'border border-blue-700 hover:border-blue-600 disabled:border-blue-400';
            }

            break;
    }
@endphp

<{{ $tag }} {{ 
    $attributes->class([
        'h-10', 
        'px-6 py-2',
        'mb-1',
        'text-sm',
        'font-semibold',
        'transition',
        'rounded',
        $display,
        $textColor, 
        $bgColor,
        $border,
        $pointerEvents
    ]) 
}}>
    {{ $slot }}
</{{ $tag }}>
        
