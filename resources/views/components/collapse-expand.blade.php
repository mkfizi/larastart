<div id="{{ $id ?? '' }}" tabindex="0" {{
    $attributes->class([
        'overflow-hidden',
        'transition-all',
    ]) 
}}>
    <div class="p-4">
        {{ $slot }}
    </div>
</div>