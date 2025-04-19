<x-minimal-layout>

    <x-slot:title>
        {{__('Server Error')}}
    </x-slot:title>

    <x-slot:code>
        {{__('500')}}
    </x-slot:code>

    <x-slot:message>
        {{__('Server Error')}}
    </x-slot:message>

</x-minimal-layout>

{{--

@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error'))

--}}

