@extends('app')

@section('layout')
    <div class="flex">
        @include('layouts.partials.dashboard.sidebar')
        <main>
            {{-- @include('layouts.partials.web.navbar') --}}
            <div class="container px-4 py-16 mx-auto">
                {{ $slot }}
            </div>
        </main>
    </div>
    {{-- @include('layouts.partials.web.footer') --}}
@endsection