<aside class="hidden sm:block">

    <div class="py-8">
        <div class="flex justity-center items-center" >

            <ul class="flex flex-col justify-center">
                
                @if (isset($pages))

                    <a class="hover:underline  decoration-cyan-500 text-cyan-700 flex justify-center" href="{{ $pages->previousPageUrl() }}">{!! $pages->previousPageUrl() ? '&#8679;' : '' !!} </a>

                    @foreach ($pages as $page)

                        <li class=" my-5 flex justify-center"><a class="hover:underline  decoration-cyan-500 {{Route::current()->parameters['page']->id == $page->id ? 'pointer-events-none text-gray-500' : 'text-cyan-700' }}" href="{{ route('page.show', $page) }}">{{ $page->title }}</a></li>

                    @endforeach

                    <a class="hover:underline  decoration-cyan-500 text-cyan-700 flex justify-center" href="{{ $pages->nextPageUrl() }}">{!! $pages->nextPageUrl() ? '&#8681;' : '' !!}</a>

                @else

                    <li class=" my-5"><a class="hover:underline text-cyan-700 decoration-cyan-500" href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class=" my-5"><a class="hover:underline text-cyan-700 decoration-cyan-500" href="{{ route('page.show',1) }}">Tutorial Php</a></li>
                    <li class=" my-5"><a class="hover:underline text-cyan-700 decoration-cyan-500" href="{{ route('console') }}">Console</a></li>

                @endif
            </ul>

        </div>
    </div>

</aside>
