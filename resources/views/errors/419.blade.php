<x-minimal-layout>

    <x-slot:title>
        {{__('Page Expired')}}
    </x-slot:title>

    <x-slot:code>
        {{__('419')}}
    </x-slot:code>

    <x-slot:message>
        {{__('Page Expired')}}
    </x-slot:message>

</x-minimal-layout>

{{--

@extends('errors::minimal')

@section('title', __('Page Expired'))
@section('code', '419')
@section('message', __('Page Expired'))

--}}


