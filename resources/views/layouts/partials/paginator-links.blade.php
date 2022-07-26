{{-- Table paginator links view --}}

<div class="flex flex-col flex-wrap items-center justify-center gap-2 p-4 text-left lg:flex-row lg:justify-between">
    <div class="flex items-center gap-2 text-sm">
        {{-- First page link --}}
        @if( $paginator->onFirstPage() )
            <div aria-disabled="true" class="flex items-center justify-center w-6 h-6 mb-1 text-sm font-semibold text-blue-700 bg-transparent border border-blue-700 rounded dark:border-blue-500 dark:text-blue-500" aria-label="{{ __('Go to first page') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <polyline points="11 7 6 12 11 17" />
                    <polyline points="17 7 12 12 17 17" />
                </svg>
            </div>
        @else
            <a href="{{ $paginator->url(1) }}" aria-label="{{ __('pagination.first') }}" class="flex items-center justify-center w-6 h-6 mb-1 text-sm font-semibold text-blue-700 transition bg-transparent border border-blue-700 rounded dark:border-blue-500 dark:text-blue-500 hover:bg-blue-600 hover:text-white hover:border-blue-600 dark:hover:bg-blue-600 dark:hover:text-white dark:hover:border-blue-600" aria-label="{{ __('Go to first page') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <polyline points="11 7 6 12 11 17" />
                    <polyline points="17 7 12 12 17 17" />
                </svg>
            </a>
        @endif

        {{-- Previous 2 pages link --}}
        @if ($paginator->currentPage() > 2)
            <a href="{{ $paginator->url($paginator->currentPage() - 2)}}" class="flex items-center justify-center w-6 h-6 mb-1 text-sm text-blue-600 dark:text-blue-400 hover:text-blue-500 dark:hover:text-blue-500">{{ $paginator->currentPage() - 2 }}</a>
        @endif

        {{-- Previous --}}
        @if ($paginator->currentPage() > 1)
            <a href="{{ $paginator->url($paginator->currentPage() - 1)}}" class="flex items-center justify-center w-6 h-6 mb-1 text-sm text-blue-600 dark:text-blue-400 hover:text-blue-500 dark:hover:text-blue-500">{{ $paginator->currentPage() - 1 }}</a>
        @endif
        
        {{-- Current page --}}
        <div aria-disabled="true" class="flex items-center justify-center w-6 h-6 mb-1 text-sm font-semibold text-white align-middle bg-blue-700 border border-blue-700 rounded">{{ $paginator->currentPage() }}</div>
        
        {{-- Current page plus 1 --}}
        @if ($paginator->currentPage() < $paginator->lastPage())
            <a href="{{ $paginator->url($paginator->currentPage() + 1)}}" class="flex items-center justify-center w-6 h-6 mb-1 text-sm text-blue-600 dark:text-blue-400 hover:text-blue-500 dark:hover:text-blue-500">{{ $paginator->currentPage() + 1 }}</a>
        @endif

        {{-- Current page plus 2 --}}
        @if ($paginator->currentPage() < $paginator->lastPage() - 1)
            <a href="{{ $paginator->url($paginator->currentPage() + 2)}}" class="flex items-center justify-center w-6 h-6 mb-1 text-sm text-blue-600 dark:text-blue-400 hover:text-blue-500 dark:hover:text-blue-500">{{ $paginator->currentPage() + 2 }}</a>
        @endif

        {{-- Last page link --}}
        @if( $paginator->hasMorePages())
            <a href="{{ $paginator->url($paginator->lastPage()) }}" class="flex items-center justify-center w-6 h-6 mb-1 text-sm font-semibold text-blue-700 transition bg-transparent border border-blue-700 rounded dark:border-blue-500 dark:text-blue-500 hover:bg-blue-600 hover:text-white hover:border-blue-600 dark:hover:bg-blue-600 dark:hover:text-white dark:hover:border-blue-600" aria-label="{{ __('Go to last page') }}">
                <svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <polyline points="7 7 12 12 7 17" />
                    <polyline points="13 7 18 12 13 17" />
                </svg>
            </a>
        @else
            <div aria-disabled="true" class="flex items-center justify-center w-6 h-6 mb-1 text-sm font-semibold text-blue-700 transition bg-transparent border border-blue-700 rounded dark:border-blue-500 dark:text-blue-500" aria-label="{{ __('Go to last page') }}">
                <svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <polyline points="7 7 12 12 7 17" />
                    <polyline points="13 7 18 12 13 17" />
                </svg>
            </div>
        @endif
    </div>
    <p class="mb-1 text-xs lg:order-first">
        {{ __('Showing') }} 
        @if ($paginator->firstItem())
            <span class="font-semibold">{{ $paginator->firstItem() }}</span>
            {{ __('to') }}
            <span class="font-semibold">{{ $paginator->lastItem() }}</span>
        @else
            {{ $paginator->count() }}
        @endif
        {{__('of')}} 
        <span class="font-semibold">{{ $paginator->total() }}</span>
    </p>
</div>