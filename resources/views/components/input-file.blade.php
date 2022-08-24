<input {{ 
    $attributes->class([
        'h-10 file:h-10',
        'file:px-6',
        'mb-1 file:mr-2',
        'text-sm',
        'transition',
        'file:text-white',
        'bg-transparent file:bg-blue-700 file:disabled:bg-blue-400',
        'file:hover:bg-blue-600 dark:file:hover:bg-blue-500',
        'border-0 file:border-0',
        'rounded file:rounded',
        'appearance-none',
        'file:font-semibold',
        'focus:outline-none',
        'focus:ring-0',
        'disabled:pointer-events-none'
    ]) 
}} type="file" value="{{ $slot }}">