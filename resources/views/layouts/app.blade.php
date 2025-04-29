<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">

        <x-banner />

        <div class=" bg-gray-100">

            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))

                {{ $header }}

            @endif

            <!-- Page Content -->
            <main>

                <div class="py-12">

                    <div class="flex flex-row max-w-7xl mx-auto sm:px-6 lg:px-8">

                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mx-2 w-1/4 flex items-start justify-center hidden sm:block" {{ $attributes }}>

                            {{$aside}}

                        </div>

                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5 w-full">

                            <div class="px-3 bg-white border-b border-gray-200">

                                <div class="flex flex-row grow">

                                  {!! $slot !!}

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </main>

            <x-footer />
        </div>


        @stack('modals')

        @livewireScripts
    </body>
</html>
