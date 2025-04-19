<x-minimal-layout>

    <x-slot:title>
        {{__('Payment Required')}}
    </x-slot:title>

    <x-slot:code>
        {{__('402')}}
    </x-slot:code>

    <x-slot:message>
        {{__('Payment Required')}}
    </x-slot:message>

</x-minimal-layout>



{{--

@extends('errors::minimal')

@section('title', __('Payment Required'))
@section('code', '402')
@section('message', __('Payment Required'))

--}}
