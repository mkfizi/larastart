@section('title', __('Dashboard'))

<x-dashboard-layout>

    {{-- Statistic --}}
    <div class="grid gap-4 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <div class="p-4 bg-white rounded-md shadow-md dark:bg-gray-800">
            <div class="flex justify-between gap-3">
                <div class="flex items-center">
                    <div class="p-4 bg-blue-200 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-blue-500" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="6" cy="19" r="2" />
                            <circle cx="17" cy="19" r="2" />
                            <path d="M17 17h-11v-14h-2" />
                            <path d="M6 5l14 1l-1 7h-13" />
                        </svg>
                    </div>
                </div>
                <div class="flex flex-col justify-between">
                    <div class="mb-2">
                        <x-text class="font-semibold text-gray-600 dark:text-gray-400">{{ __('Monthly Sales') }}</x-text>
                    </div>
                    <div class="text-right">
                        <x-title-sm>$11,805.25</x-title-sm>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4 bg-white rounded-md shadow-md dark:bg-gray-800">
            <div class="flex justify-between gap-3">
                <div class="flex items-center">
                    <div class="p-4 bg-blue-200 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-blue-500" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <rect x="3" y="5" width="18" height="14" rx="3" />
                            <line x1="3" y1="10" x2="21" y2="10" />
                            <line x1="7" y1="15" x2="7.01" y2="15" />
                            <line x1="11" y1="15" x2="13" y2="15" />
                        </svg>
                    </div>
                </div>
                <div class="flex flex-col justify-between">
                    <div class="mb-2">
                        <x-text class="font-semibold text-gray-600 dark:text-gray-400">{{ __('Monthly Orders') }}</x-text>
                    </div>
                    <div class="text-right">
                        <x-title-sm>1,121</x-title-sm>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4 bg-white rounded-md shadow-md dark:bg-gray-800">
            <div class="flex justify-between gap-3">
                <div class="flex items-center">
                    <div class="p-4 bg-blue-200 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-blue-500" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="9" cy="7" r="4" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                        </svg>
                    </div>
                </div>
                <div class="flex flex-col justify-between">
                    <div class="mb-2">
                        <x-text class="font-semibold text-gray-600 dark:text-gray-400">{{ __('Total Customers') }}</x-text>
                    </div>
                    <div class="text-right">
                        <x-title-sm>32,689</x-title-sm>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4 bg-white rounded-md shadow-md dark:bg-gray-800">
            <div class="flex justify-between gap-3">
                <div class="flex items-center">
                    <div class="p-4 bg-blue-200 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-blue-500" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3.5 5.5l1.5 1.5l2.5 -2.5" />
                            <path d="M3.5 11.5l1.5 1.5l2.5 -2.5" />
                            <path d="M3.5 17.5l1.5 1.5l2.5 -2.5" />
                            <line x1="11" y1="6" x2="20" y2="6" />
                            <line x1="11" y1="12" x2="20" y2="12" />
                            <line x1="11" y1="18" x2="20" y2="18" />
                        </svg>
                    </div>
                </div>
                <div class="flex flex-col justify-between">
                    <div class="mb-2">
                        <x-text class="font-semibold text-gray-600 dark:text-gray-400">{{ __('Pending Tasks') }}</x-text>
                    </div>
                    <div class="text-right">
                        <x-title-sm>473</x-title-sm>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Table --}}
    <p class="mb-4 text-xl font-semibold">Table</p>

    @php
        $array = [(object)['id'=>'ORD3107','name'=>'Matthew Sanders','amount'=>3780.45,'status'=>1,'date'=>'1981-07-31'],(object)['id'=>'ORD1112','name'=>'Zachary Baker','amount'=>819.20,'status'=>1,'date'=>'1981-12-11'],(object)['id'=>'ORD7070','name'=>'Brian Haner Jr.','amount'=>1128.99,'status'=>1,'date'=>'1981-07-07'],(object)['id'=>'ORD4122','name'=>'Matt Wendy','amount'=>4960.78,'status'=>3,'date'=>'1981-02-04'],(object)['id'=>'ORD8127','name'=>'Justin Sane','amount'=>321.20,'status'=>3,'date'=>'1980-08-26'],(object)['id'=>'ORD3152','name'=>'Dameon Ash','amount'=>1194.18,'status'=>2,'date'=>'1984-08-31'],(object)['id'=>'ORD1811','name'=>'Jonathan Seward','amount'=>1151.18,'status'=>1,'date'=>'1984-11-18'],(object)['id'=>'ORD2812','name'=>'James Sullivan','amount'=>9311.68,'status'=>2,'date'=>'1981-02-09'],(object)['id'=>'ORD1702','name'=>'Arin Ilejay','amount'=>6178.10,'status'=>3,'date'=>'1988-02-17'],(object)['id'=>'ORD1577','name'=>'Brooks Wackerman','amount'=>2425.60,'status'=>1,'date'=>'1981-02-14'],(object)['id'=>'ORD2812','name'=>'James Sullivan','amount'=>9311.68,'status'=>2,'date'=>'1981-02-09'],(object)['id'=>'ORD1702','name'=>'Arin Ilejay','amount'=>6178.10,'status'=>3,'date'=>'1988-02-17'],(object)['id'=>'ORD1577','name'=>'Brooks Wackerman','amount'=>2425.60,'status'=>1,'date'=>'1981-02-14'],(object)['id'=>'ORD3152','name'=>'Dameon Ash','amount'=>1194.18,'status'=>2,'date'=>'1984-08-31'],(object)['id'=>'ORD1811','name'=>'Jonathan Seward','amount'=>1151.18,'status'=>1,'date'=>'1984-11-18'],(object)['id'=>'ORD4122','name'=>'Matt Wendy','amount'=>4960.78,'status'=>3,'date'=>'1981-02-04'],(object)['id'=>'ORD8127','name'=>'Justin Sane','amount'=>321.20,'status'=>3,'date'=>'1980-08-26'],(object)['id'=>'ORD3107','name'=>'Matthew Sanders','amount'=>3780.45,'status'=>1,'date'=>'1981-07-31'],(object)['id'=>'ORD1112','name'=>'Zachary Baker','amount'=>819.20,'status'=>1,'date'=>'1981-12-11'],(object)['id'=>'ORD7070','name'=>'Brian Haner Jr.','amount'=>1128.99,'status'=>1,'date'=>'1981-07-07'],(object)['id'=>'ORD1112','name'=>'Zachary Baker','amount'=>819.20,'status'=>1,'date'=>'1981-12-11'],(object)['id'=>'ORD7070','name'=>'Brian Haner Jr.','amount'=>1128.99,'status'=>1,'date'=>'1981-07-07'],(object)['id'=>'ORD1811','name'=>'Jonathan Seward','amount'=>1151.18,'status'=>1,'date'=>'1984-11-18'],(object)['id'=>'ORD4122','name'=>'Matt Wendy','amount'=>4960.78,'status'=>3,'date'=>'1981-02-04'],(object)['id'=>'ORD8127','name'=>'Justin Sane','amount'=>321.20,'status'=>3,'date'=>'1980-08-26'],(object)['id'=>'ORD3107','name'=>'Matthew Sanders','amount'=>3780.45,'status'=>1,'date'=>'1981-07-31'],(object)['id'=>'ORD1577','name'=>'Brooks Wackerman','amount'=>2425.60,'status'=>1,'date'=>'1981-02-14'],(object)['id'=>'ORD3152','name'=>'Dameon Ash','amount'=>1194.18,'status'=>2,'date'=>'1984-08-31'],(object)['id'=>'ORD2812','name'=>'James Sullivan','amount'=>9311.68,'status'=>2,'date'=>'1981-02-09'],(object)['id'=>'ORD1702','name'=>'Arin Ilejay','amount'=>6178.10,'status'=>3,'date'=>'1988-02-17'],(object)['id'=>'ORD3107','name'=>'Matthew Sanders','amount'=>3780.45,'status'=>1,'date'=>'1981-07-31'],(object)['id'=>'ORD1112','name'=>'Zachary Baker','amount'=>819.20,'status'=>1,'date'=>'1981-12-11'],(object)['id'=>'ORD7070','name'=>'Brian Haner Jr.','amount'=>1128.99,'status'=>1,'date'=>'1981-07-07'],(object)['id'=>'ORD4122','name'=>'Matt Wendy','amount'=>4960.78,'status'=>3,'date'=>'1981-02-04'],(object)['id'=>'ORD8127','name'=>'Justin Sane','amount'=>321.20,'status'=>3,'date'=>'1980-08-26'],(object)['id'=>'ORD3152','name'=>'Dameon Ash','amount'=>1194.18,'status'=>2,'date'=>'1984-08-31'],(object)['id'=>'ORD1811','name'=>'Jonathan Seward','amount'=>1151.18,'status'=>1,'date'=>'1984-11-18'],(object)['id'=>'ORD2812','name'=>'James Sullivan','amount'=>9311.68,'status'=>2,'date'=>'1981-02-09'],(object)['id'=>'ORD1702','name'=>'Arin Ilejay','amount'=>6178.10,'status'=>3,'date'=>'1988-02-17'],(object)['id'=>'ORD1577','name'=>'Brooks Wackerman','amount'=>2425.60,'status'=>1,'date'=>'1981-02-14'],(object)['id'=>'ORD2812','name'=>'James Sullivan','amount'=>9311.68,'status'=>2,'date'=>'1981-02-09'],(object)['id'=>'ORD1702','name'=>'Arin Ilejay','amount'=>6178.10,'status'=>3,'date'=>'1988-02-17'],(object)['id'=>'ORD1577','name'=>'Brooks Wackerman','amount'=>2425.60,'status'=>1,'date'=>'1981-02-14'],(object)['id'=>'ORD3152','name'=>'Dameon Ash','amount'=>1194.18,'status'=>2,'date'=>'1984-08-31'],(object)['id'=>'ORD1811','name'=>'Jonathan Seward','amount'=>1151.18,'status'=>1,'date'=>'1984-11-18'],(object)['id'=>'ORD4122','name'=>'Matt Wendy','amount'=>4960.78,'status'=>3,'date'=>'1981-02-04'],(object)['id'=>'ORD8127','name'=>'Justin Sane','amount'=>321.20,'status'=>3,'date'=>'1980-08-26'],(object)['id'=>'ORD3107','name'=>'Matthew Sanders','amount'=>3780.45,'status'=>1,'date'=>'1981-07-31'],(object)['id'=>'ORD1112','name'=>'Zachary Baker','amount'=>819.20,'status'=>1,'date'=>'1981-12-11'],(object)['id'=>'ORD7070','name'=>'Brian Haner Jr.','amount'=>1128.99,'status'=>1,'date'=>'1981-07-07'],(object)['id'=>'ORD1112','name'=>'Zachary Baker','amount'=>819.20,'status'=>1,'date'=>'1981-12-11'],(object)['id'=>'ORD7070','name'=>'Brian Haner Jr.','amount'=>1128.99,'status'=>1,'date'=>'1981-07-07'],(object)['id'=>'ORD1811','name'=>'Jonathan Seward','amount'=>1151.18,'status'=>1,'date'=>'1984-11-18'],(object)['id'=>'ORD4122','name'=>'Matt Wendy','amount'=>4960.78,'status'=>3,'date'=>'1981-02-04'],(object)['id'=>'ORD8127','name'=>'Justin Sane','amount'=>321.20,'status'=>3,'date'=>'1980-08-26'],(object)['id'=>'ORD3107','name'=>'Matthew Sanders','amount'=>3780.45,'status'=>1,'date'=>'1981-07-31'],(object)['id'=>'ORD1577','name'=>'Brooks Wackerman','amount'=>2425.60,'status'=>1,'date'=>'1981-02-14'],(object)['id'=>'ORD3152','name'=>'Dameon Ash','amount'=>1194.18,'status'=>2,'date'=>'1984-08-31'],(object)['id'=>'ORD2812','name'=>'James Sullivan','amount'=>9311.68,'status'=>2,'date'=>'1981-02-09'],(object)['id'=>'ORD1702','name'=>'Arin Ilejay','amount'=>6178.10,'status'=>3,'date'=>'1988-02-17']];
        $currentPage = null;
        $perPage = 10;
        $options = [];
        $currentPage = $currentPage ?: (\Illuminate\Pagination\Paginator::resolveCurrentPage() ?: 1);
        $collections = $array instanceof Illuminate\Support\Collection ? $array : Illuminate\Support\Collection::make($array);
        $examples = new Illuminate\Pagination\LengthAwarePaginator($collections->forPage($currentPage, $perPage), $collections->count(), $perPage, $currentPage);
        $examples->withPath('/dashboard');
    @endphp

    <div class="mb-8 overflow-hidden bg-white rounded-md shadow-md dark:bg-gray-800">
        <x-table>
            <x-table-head>
                <tr>
                    <x-table-th>{{ __('No') }}</x-table-th>
                    <x-table-th>{{ __('Order ID') }}</x-table-th>
                    <x-table-th>{{ __('Customer') }}</x-table-th>
                    <x-table-th>{{ __('Amount') }}</x-table-th>
                    <x-table-th>{{ __('Status') }}</x-table-th>
                    <x-table-th>{{ __('Date') }}</x-table-th>
                    <x-table-th>{{ __('Actions') }}</x-table-th>
                </tr>
            </x-table-head>
            
            @foreach($examples as $no => $example)
                <tr>
                    <x-table-td>{{ ++$no }}</x-table-td>
                    <x-table-td>
                        <x-link-underline href="#">{{ $example->id }}</x-link-underline>
                    </x-table-td>
                    <x-table-td>{{ $example->name }}</x-table-td>
                    <x-table-td>${{ number_format((float)$example->amount, 2, '.', '') }}</x-table-td>
                    <x-table-td>
                        @if($example->status == 1)
                            <span class="px-2 py-px text-xs text-white bg-green-600 rounded">{{ __('Completed') }}</span>
                        @elseif($example->status == 2)
                            <span class="px-2 py-px text-xs text-white bg-yellow-600 rounded">{{ __('Pending') }}</span>
                        @elseif($example->status == 3)
                            <span class="px-2 py-px text-xs text-white bg-red-600 rounded">{{ __('Cancelled') }}</span>
                        @endif
                    </x-table-td>
                    <x-table-td>{{ date('d-F-Y', strtotime($example->date)) }}</x-table-td>
                    <x-table-td>
                        <span class="flex gap-4">
                            <x-table-update></x-table-update>
                            <x-table-delete></x-table-delete>
                        </span>
                    </x-table-td>
                </tr>
            @endforeach
        </x-table>
        {{ $examples->links() }}
    </div>

</x-dashboard-layout>