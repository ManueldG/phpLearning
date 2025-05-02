
@props(['submit'])

<x-app-layout >

    <x-slot:header >

        <header class="bg-white shadow my-2">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

                <h2>{!! $page->title !!}</h2>

            </div>
        </header>

    </x-slot>
<!-- se mi trovo in page.show mostrare le lezioni di lato altrimnti i link home dashboard ...-->
    <x-slot:aside >

        <x-aside :pages="request()->routeIs('page.show') ? $page::paginate(5) : '' ">

        </x-aside>

    </x-slot:aside>

        <div class="flex flex-col grow">

            <x-my-form submit="invio" class="grow" action="/console" method="get" target="_self" >

                <x-slot name="title">
                    {{ $page->title }}
                </x-slot>

                <x-slot name="description">
                    <span class="whitespace-pre-wrap text-base">{{ __($page->description) }}</span>
                </x-slot>

                <x-slot name="form" >

                    <textarea id="id" class="w-full" name="code" type="text" placeholder="insert code" rows="7">
{{ $page->example ?? "" }}
                    </textarea>

                    <input type="submit" class="rounded-xl inline-block px-5 py-2 my-3 border-[#19140035] border text-[#1b1b18]  hover:border-[#19140035] text-sm leading-normal" value="{{ __('Enter') }}" >


                </x-slot>

            </x-my-form>

            <div class="w-full">

                <div class="m-3 whitespace-pre-wrap overflow-x-auto">{!! $result ?? "<div class='text-red-700'>" . $error . "</div>" !!}</div>

            </div>

            <div class="flex flex-row justify-center gap-3  sm:hidden">



                @for ( $i = count($page::all()) ; $i > 0; $i--)

                    @if($page->id > $page::all()[$i-1]->id )
                        <a class = "relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-900 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-sky-100 active:text-gray-500 transition ease-in-out duration-150 dark:bg-sky-500 dark:border-gray-600 dark:text-gray-100 dark:focus:border-blue-700 dark:active:bg-sky-500 dark:active:text-gray-300" href="{{ route('page.show', $page::all()[$i-1]->id) }}"> {!! __('pagination.previous') !!}</a>
                        @break
                    @endif

                @endfor

                @foreach ($page::all() as $elem)


                    @if ($page->id < $elem->id )

                        <a class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-900 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-sky-100 active:text-gray-500 transition ease-in-out duration-150 dark:bg-sky-500 dark:border-gray-600 dark:text-gray-100 dark:focus:border-blue-700 dark:active:bg-sky-500 dark:active:text-gray-300" href="{{ route('page.show', $elem->id) }}"> {!! __('pagination.next') !!}</a>
                        @break

                    @endif

                @endforeach

            </div>

        </div>

</x-app-layout>


