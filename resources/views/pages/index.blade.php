<x-profile-layout>

    @auth
        @if(Auth::user()->id == 1)
            <div class="my-3 block">
                <a class="ring rounded bg-sky-500/50" href="{{ route('page.create') }}">{{ __('new') }}</a>
            </div>
        @endif
    @endauth

    <div class ="grid grid-cols-4 gap-2 " style="grid-template-columns: .3fr 2fr 3.5fr 2fr;">

        @foreach ($pages as $key=>$page)

            <!--<div class="flex justify-between gap-8 w-full my-2">-->

                <div class="">{{ $page->id }}</div>
                <div class="">{{ Str::of($page->title)->limit(13) }}</div>
                <div class="">{{ Str::of($page->description)->limit(40) }}</div>

                <div class="flex flex-row justify-center gap-3">
                    <div><a class="ring rounded bg-sky-500/50" href="{{ route('page.show',$page->id) }}">mostra</a></div>
                    @auth
                        @if (Auth::user()->id == 1)

                            <div><a class="ring rounded bg-sky-500/50" href="{{ route('page.edit',$page->id) }}">modifica</a></div>
                            <form  action="{{ route('page.destroy',$page->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="ring rounded bg-sky-500/50" type="submit">elimina</button>
                            </form>

                        @endif
                    @endauth
                </div>

                <!--</div>-->

            <!--</div>-->

        @endforeach


    </div>

</x-profile-layout>
