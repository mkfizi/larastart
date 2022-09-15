<input {{ 
    $attributes->class([
        'w-full',
        'text-sm',
        'file:px-6',
        'focus:ring-0',
        'h-10 file:h-10',
        'mb-1 file:mr-2', 
        'appearance-none',
        'file:text-white',
        'file:font-semibold',
        'focus:outline-none',
        'rounded file:rounded',
        'border-0 file:border-0',
        'disabled:pointer-events-none',
        'bg-transparent file:bg-blue-700 file:disabled:bg-blue-400 file:hover:bg-blue-600 dark:file:hover:bg-blue-500',
    ]) 
}} type="file" value="{{ $slot }}">