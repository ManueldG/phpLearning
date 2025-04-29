@if (session('status'))

<div class="text-red-500">{{ __(session('status')) }}</div>

@endif
@auth

    <x-app-layout>

        <x-slot:header >

            <header class="bg-white shadow my-2">

                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

                    <x-title />

                </div>

            </header>

        </x-slot>

        <x-slot:aside>
        </x-slot:aside>

        <div class="py-12">
            <div class="flex flex-row max-w-7xl mx-auto sm:px-6 lg:px-8">

                <x-home />

            </div>
        </div>

    </x-app-layout>

@else

    <x-guest-layout>

        <x-slot:header >

            <header class="bg-white shadow my-2">

                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

                    <x-title />

                </div>

            </header>

        </x-slot>

        <div class="py-12">

            <div class="flex flex-row max-w-7xl mx-auto sm:px-6 lg:px-8">

                <x-home />

            </div>

        </div>

    </x-guest-layout>

@endauth





