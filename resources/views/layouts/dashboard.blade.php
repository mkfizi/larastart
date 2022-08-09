@extends('app')

@php
    $bgColor = 'bg-gray-50';
@endphp

@section('layout')
    <div class="flex">
        @include('layouts.partials.dashboard.sidebar')

        <div class="flex-auto w-full">
            @include('layouts.partials.dashboard.navbar')
            <main class="container p-4 mx-auto lg:px-6">
                <section class="mt-4 mb-16">
                    <p class="mb-4 text-2xl font-semibold">{{ !empty($attributes['pageTitle']) ? $attributes['pageTitle'] : '' }}</p>
                    {{ $slot }}
                </section>
            </main>
            @include('layouts.partials.dashboard.footer')
        </div>
    </div>
@endsection