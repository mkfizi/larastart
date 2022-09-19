<div id="{{ $id ?? '' }}" tabindex="-1" {{
    $attributes->class([
        'h-0',
        'invisible',
        'overflow-hidden',
        'transition-all',
    ]) 
}}>
    <div class="p-4">
        {{ $slot }}
    </div>
</div>