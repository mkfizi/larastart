<div {{ 
    $attributes->class([
        'overflow-x-auto',
        'border-b border-gray-200 dark:border-gray-600',
    ]) 
}}>
    <table class="w-full whitespace-nowrap">
        {{ $slot }}
    </table>  
</div>