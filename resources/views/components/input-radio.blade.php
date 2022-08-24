<input {{ 
    $attributes->class([
        'mb-1', 
        'text-blue=500', 
        'bg-transparent disabled:bg-gray-100 dark:disabled:bg-gray-700', 
        'border border-gray-400 focus:border-blue-500 dark:border-gray-600', 
        'focus:ring-blue-500',
        'focus:outline-none',
        'appearance-none'
    ]) 
}} type="radio" value="{{ $slot }}">