@props(['submit'])

<x-app-layout >

    <x-slot:header >

    <header class="bg-white shadow my-2">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

           <x-title />

        </div>
    </header>

    </x-slot>

        <div class="flex flex-col grow">

            <x-my-form submit="invio" class="grow" action="/console" method="get" target="_self" >

                <x-slot name="title">
                    <x-title />
                </x-slot>

                <x-slot name="description">
                    {{ __('') }}
                </x-slot>

                <x-slot name="form" >

                    @method('GET')
                    @csrf
                    <input class="w-5/6" name="code" type="text" placeholder="insert code">

                </x-slot>

            </x-my-form>

            <div class="w-5/6 ">
                <div class="m-3 flex-wrap overflow-x-auto">

                    {!! $result ?? "" !!}

                </div>
            </div>

        </div>

</x-app-layout>


