
@props(['submit'])

<x-app-layout >

    <x-slot:header >

        <header class="bg-white shadow my-2">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

                <h2>{!! $page->title !!}</h2>

            </div>
        </header>

    </x-slot>

        <div class="flex flex-col grow">

            <x-my-form submit="invio" class="grow" action="/console" method="get" target="_self" >

                <x-slot name="title">
                    {{ $page->title }}
                </x-slot>



                <x-slot name="description">
                    <span class="whitespace-pre-wrap text-base">{{ __($page->description) }}</span>
                </x-slot>

                <x-slot name="form" >

                    @method('GET')
                    @csrf
                    <textarea id="id" class="w-full" name="code" type="text" placeholder="insert code" rows="7">
{{ $page->example ?? "" }}
                    </textarea>

                    <input type="submit" class="rounded-xl inline-block px-5 py-2 my-3 border-[#19140035] border text-[#1b1b18]  hover:border-[#19140035] text-sm leading-normal" value="{{ __('Enter') }}" >


                </x-slot>

            </x-my-form>

            <div class="w-full">
                <div class="m-3 whitespace-pre-wrap overflow-x-auto">{!! $result ?? "<div class='text-red-700'>" . $error . "</div>" !!}</div>
            </div>

        </div>

</x-app-layout>


