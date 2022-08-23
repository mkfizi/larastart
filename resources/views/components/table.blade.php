<div {{ 
    $attributes->class([
        'w-full',
        'overflow-x-auto',
        'border-b border-gray-200 dark:border-gray-600'
    ]) 
}}>
    <table class="w-full text-sm whitespace-nowrap lg:whitespace-normal">
        {{ $slot }}
    </table>  
</div>