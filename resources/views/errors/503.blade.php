@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __('Service Unavailable'))
<x-error-layout>
    @section('title', __('Service Unavailable'))
    @section('message', __('Service for this page is unavailable.'))
</x-error-layout>
