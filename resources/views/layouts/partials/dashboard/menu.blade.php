<div class="relative flex items-center">
    <button data-toggle="dropdown" data-target="menuDropdown" class="w-8 h-8 border-2 border-blue-600 rounded-full dark:border-blue-400 hover:border-blue-500 dark:hover:border-blue-500" aria-label="Toggle navbar menu" aria-expanded="false" aria-controls="menuDropdown">
        <img src="{{ asset('img/avatar.png') }}" width="32" height="32" class="rounded-full" alt="">
    </button>
    
    <ul id="menuDropdown" tabindex="-1" class="absolute right-0 z-30 invisible w-32 py-2 overflow-y-auto transition origin-top-right scale-0 bg-white border border-gray-100 rounded-md shadow-md opacity-0 dark:border-gray-700 dark:bg-gray-700 top-16 max-h-80">
        @foreach( config('larastart.menu') as $item)
            <li><a href="{{ $item['url']}}" class="block px-4 py-2 text-sm font-medium hover:text-blue-500">{{ __($item['title'] )}}</a></li>
        @endforeach
    </ul>
</div>