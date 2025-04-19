<x-minimal-layout>

    <x-slot:title>
        {{__('Service Unavailable')}}
    </x-slot:title>

    <x-slot:code>
        {{__('503')}}
    </x-slot:code>

    <x-slot:message>
        {{__('Service Unavailable')}}
    </x-slot:message>

</x-minimal-layout>

{{--
@extends('layouts::layout')



@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __('Service Unavailable'))

--}}
