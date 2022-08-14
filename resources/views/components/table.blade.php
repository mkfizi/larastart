@props([
    'headers'   => [],
    'data'      => ''
])

<div {{ $attributes->merge(['class' => 'mb-8 overflow-hidden bg-white rounded-md shadow-md dark:bg-gray-800']) }}>
    <div class="w-full overflow-x-auto rounded-md">
        <table class="w-full text-sm whitespace-nowrap lg:whitespace-normal">
            <thead class="text-left bg-gray-100 border-b border-gray-200 dark:bg-gray-700 dark:border-gray-800">
                <tr>
                    @foreach($headers as $header)
                        <th class="p-4">{{ $header }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                {{ $slot }}
            </tbody>
        </table>  
    </div>
    
    @if(count($data) > 0)
        <div class="flex flex-col flex-wrap items-center justify-center gap-2 p-4 text-left border-t border-gray-200 lg:flex-row lg:justify-between dark:border-gray-600">
            <div class="flex items-center gap-2 text-sm">
                @if( !$data->onFirstPage())
                    <a href="{{ $data->url(1) }}" class="flex items-center justify-center w-6 h-6 mb-1 text-sm font-semibold text-blue-700 transition bg-transparent border border-blue-700 rounded dark:border-blue-500 dark:text-blue-500 hover:bg-blue-600 hover:text-white hover:border-blue-600 dark:hover:bg-blue-600 dark:hover:text-white dark:hover:border-blue-600" aria-label="Go to first page">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <polyline points="11 7 6 12 11 17" />
                            <polyline points="17 7 12 12 17 17" />
                        </svg>
                    </a>
                    <a href="{{ $data->previousPageUrl() }}" class="flex items-center justify-center w-6 h-6 mb-1 text-sm font-semibold text-blue-700 transition bg-transparent border border-blue-700 rounded dark:border-blue-500 dark:text-blue-500 hover:bg-blue-600 hover:text-white hover:border-blue-600 dark:hover:bg-blue-600 dark:hover:text-white dark:hover:border-blue-600" aria-label="Go to previous page">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <polyline points="15 6 9 12 15 18" />
                        </svg>
                    </a>
                @endif

                @if ($data->currentPage() > 2)
                    <a href="{{ $data->url($data->currentPage() - 2)}}" class="flex items-center justify-center w-6 h-6 mb-1 text-sm text-blue-600 dark:text-blue-400 hover:text-blue-500 dark:hover:text-blue-500">{{ $data->currentPage() - 2 }}</a>
                @endif

                @if ($data->currentPage() > 1)
                    <a href="{{ $data->url($data->currentPage() - 1)}}" class="flex items-center justify-center w-6 h-6 mb-1 text-sm text-blue-600 dark:text-blue-400 hover:text-blue-500 dark:hover:text-blue-500">{{ $data->currentPage() - 1 }}</a>
                @endif
               
                <button type="button" class="flex items-center justify-center w-6 h-6 mb-1 text-sm font-semibold text-white align-middle transition bg-blue-700 border border-blue-700 rounded hover:bg-blue-600 hover:border-blue-600 disabled:bg-blue-400 disabled:border-blue-400 disabled:pointer-events-none">{{ $data->currentPage() }}</button>
                
                @if ($data->currentPage() < count($data))
                    <a href="{{ $data->url($data->currentPage() + 1)}}" class="flex items-center justify-center w-6 h-6 mb-1 text-sm text-blue-600 dark:text-blue-400 hover:text-blue-500 dark:hover:text-blue-500">{{ $data->currentPage() + 1 }}</a>
                @endif

                @if ($data->currentPage() < count($data) - 1)
                    <a href="{{ $data->url($data->currentPage() + 2)}}" class="flex items-center justify-center w-6 h-6 mb-1 text-sm text-blue-600 dark:text-blue-400 hover:text-blue-500 dark:hover:text-blue-500">{{ $data->currentPage() + 2 }}</a>
                @endif

                @if( !$data->onLastPage())
                <a href="{{ $data->nextPageUrl() }}" class="flex items-center justify-center w-6 h-6 mb-1 text-sm font-semibold text-blue-700 transition bg-transparent border border-blue-700 rounded dark:border-blue-500 dark:text-blue-500 hover:bg-blue-600 hover:text-white hover:border-blue-600 dark:hover:bg-blue-600 dark:hover:text-white dark:hover:border-blue-600" aria-label="Go to next page">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <polyline points="9 6 15 12 9 18" />
                    </svg>
                </a>
                <a href="{{ $data->url(count($data)) }}" class="flex items-center justify-center w-6 h-6 mb-1 text-sm font-semibold text-blue-700 transition bg-transparent border border-blue-700 rounded dark:border-blue-500 dark:text-blue-500 hover:bg-blue-600 hover:text-white hover:border-blue-600 dark:hover:bg-blue-600 dark:hover:text-white dark:hover:border-blue-600" aria-label="Go to last page">
                    <svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <polyline points="7 7 12 12 7 17" />
                        <polyline points="13 7 18 12 13 17" />
                    </svg>
                </a>
                @endif
            </div>
            <p class="mb-1 text-xs lg:order-first">Showing 31-40 of 2310</p>
        </div>
    @endif
</div>