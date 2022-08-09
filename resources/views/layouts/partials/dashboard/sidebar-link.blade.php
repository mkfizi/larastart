<li>
    <a href="{{ $url }}" class="flex w-full gap-4 py-4 pl-6 pr-4 transition {{ $active ? 'text-blue-600 dark:text-blue-400' : 'hover:text-blue-500' }}">
        {!! $svg !!}
        <p class="text-sm font-semibold">
            {{ __($title) }}
        </p>
    </a>
</li>