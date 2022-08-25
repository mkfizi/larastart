
<button {{ 
    $attributes->class([
        'h-10', 
        'px-6 py-2',
        'mb-1',
        'text-sm',
        'font-semibold',
        'text-blue-700 dark:text-blue-50 hover:text-white dark:hover:text-white disabled:text-blue-300 dark:disabled:text-blue-300',
        'transition',
'bg-transparent hover:bg-blue-600 dark:hover:bg-blue-600', 
'border border-blue-700 dark:border-blue-500 hover:border-blue-600 dark:hover:border-blue-600 disabled:border-blue-300 dark:disabled:border-blue-300',   
        'rounded',
        'disabled:pointer-events-none'
    ]) 
}}>
    {{ $slot }}
</button>

