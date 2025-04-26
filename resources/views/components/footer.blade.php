<footer class="bg-white rounded-lg shadow-sm dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="{{ route('home') }}" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <x-application-logo class="block h-14 w-auto" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{ __('Interprete PHP') }}</span>
            </a>
            @if(1)
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">

                    <li>
                        <a href="https://github.com/ManueldG/phpLearning/issues/new?title=Bug%20Report&body=From%20page:%20{{ url()->current() }}%0A%0A---" class="hover:underline me-4 md:me-6 flex">
                            <img src="/storage/github.svg" class="w-4 mx-1" alt="Bug report icon"> Bug report
                        </a>
                    </li>
                    <li>
                        <a href="mailto:info@manueldellagala.it" class="hover:underline flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 mx-1">
                                <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                                <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                            </svg>

                            Contact
                        </a>
                    </li>
                </ul>
            @endif
            <span class="block text-sm text-gray-500 sm:text-end dark:text-gray-400">© 2025 <a href="https://www.manueldellagala.it/" class="hover:underline">Manuel della Gala™</a>. All Rights Reserved.</span>
        </div>

        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />

    </div>
    <div class="flex justify-center text-gray-200">
        Powered by
    </div>
    <div class="flex justify-around flex-wrap sm:flex-nowrap text-gray-200">

        <div class="flex items-center flex-col logo-tek text-gray-200 m-7">
            <img class="w-24" src="https://phpsandbox.org/images/logo.png" alt="PHPSandbox">
            <div> © 2025 <a href="https://phpsandbox.org/" class="hover:underline"> PHPSandbox™</a>. All Rights Reserved.</div>
        </div>

        <div class="flex items-center flex-col logo-tek  text-gray-200 m-7">
            <img class="w-24" src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="Laravel">
            <div> © 2025 <a href="https://www.laravel.com/" class="hover:underline">Laravel™</a>. All Rights Reserved.</div>
        </div>

        <div class="flex items-center flex-col logo-tek text-gray-200 m-7">
            <img class="w-10 " src="https://flowbite.com/docs/images/logo.svg" alt="Flowbite">
            <div>© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™ </a>. All Rights Reserved.</div>
        </div>

    </div>
</footer>
