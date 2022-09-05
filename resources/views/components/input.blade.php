@props([
    'type' => 'text'
])

@php
    $width          = null;
    $height         = null;
    $padding        = null;
    $textSize       = null; 
    $textColor      = null;
    $fontWeight     = null;
    $marginRight    = null;
    $pointerEvents  = null;

    $rounded        = 'rounded';
    $ring           = 'focus:ring-blue-500';
    $bgColor        = 'bg-transparent disabled:bg-gray-100 dark:disabled:bg-gray-700';
    $border         = 'border border-gray-400 focus:border-blue-500 dark:border-gray-600';

    switch ($type) {
        case 'checkbox':
            break;
        case 'radio':
            $rounded = null;
            break;
        case 'file':
            $ring           = 'focus:ring-0';
            $height         = 'h-10 file:h-10';
            $border         = 'border-0 file:border-0';
            $padding        = 'file:px-6';
            $rounded        = 'rounded file:rounded';
            $bgColor        = 'bg-transparent file:bg-blue-700 file:disabled:bg-blue-400 file:hover:bg-blue-600 dark:file:hover:bg-blue-500';
            $textSize       = 'text-sm';
            $textColor      = 'file:text-white';
            $fontWeight     = 'file:font-semibold';
            $marginRight    = 'file:mr-2';
            $pointerEvents  = 'disabled:pointer-events-none';
            break;
        case 'text':
        default:
            $width      = 'w-full';
            $height     = 'h-10';
            $padding    = 'px-2';
            $textSize   = 'text-sm';
            break;
    }
@endphp

<input {{ 
    $attributes->class([
        'mb-1', 
        'focus:outline-none',
        'appearance-none',
        $ring,
        $width,
        $height,
        $border,
        $bgColor,
        $rounded,
        $padding,
        $textSize,
        $textColor,
        $fontWeight,
        $marginRight,
    ]) 
}} type="{{ $type }}" value="{{ $slot }}">