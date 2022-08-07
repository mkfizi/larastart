@extends('app')

@section('layout')
    @include('layouts.partials.web.navbar')
    <main>
        <div class="container px-4 py-16 mx-auto">
            {{ $slot }}
        </div>
    </main>
    @include('layouts.partials.web.footer')
@endsection