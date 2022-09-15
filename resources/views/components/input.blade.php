<input {{ 
    $attributes->class([
        'h-10',
        'mb-1', 
        'px-2',
        'w-full',
        'rounded',
        'text-sm',
        'appearance-none',
        'focus:outline-none',
        'focus:ring-blue-500',
        'bg-transparent disabled:bg-gray-100 dark:disabled:bg-gray-700',
        'border border-gray-400 focus:border-blue-500 dark:border-gray-600',
    ]) 
}} value="{{ $slot }}">