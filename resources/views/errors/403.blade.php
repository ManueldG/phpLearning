<x-minimal-layout>

    <x-slot:title>
        {{__('Forbidden')}}
    </x-slot:title>

    <x-slot:code>
        {{__('403')}}
    </x-slot:code>

    <x-slot:message>
        {{__('Forbidden')}}
    </x-slot:message>

</x-minimal-layout>

{{--

@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))

--}}

