<x-minimal-layout>

    <x-slot:title>
        {{__('Too Many Requests')}}
    </x-slot:title>

    <x-slot:code>
        {{__('429')}}
    </x-slot:code>

    <x-slot:message>
        {{__('Too Many Requests')}}
    </x-slot:message>

</x-minimal-layout>


{{--
@extends('errors::minimal')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('Too Many Requests'))

--}}
