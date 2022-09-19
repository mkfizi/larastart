@extends('app')

@section('layout')
    <main class="container px-4 py-16 mx-auto">
        <section class="max-w-md mx-auto mt-48 text-center">
            {{ $slot }}
        </section>
    </main>
@endsection