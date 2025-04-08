<footer class="bg-white rounded-lg shadow-sm dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="{{ route('home') }}" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <x-application-logo class="block h-14 w-auto" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{ __('Interprete PHP') }}</span>
            </a>
            @if(0)
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
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
    <div class="flex justify-between text-gray-200">

        <div class="flex items-center flex-col text-gray-200 m-7">
            <img class="w-24" src="https://phpsandbox.org/images/logo.png" alt="PHPSandbox">
            <div> © 2025 <a href="https://phpsandbox.org/" class="hover:underline"> PHPSandbox™</a>. All Rights Reserved.</div>
        </div>

        <div class="flex items-center flex-col text-gray-200 m-7">
            <img class="w-24" src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="Laravel">
            <div> © 2025 <a href="https://www.laravel.com/" class="hover:underline">Laravel™</a>. All Rights Reserved.</div>
        </div>

        <div class="flex items-center flex-col text-gray-200 m-7">
            <img class="w-10 " src="https://flowbite.com/docs/images/logo.svg" alt="Flowbite">
            <div>© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™ </a>. All Rights Reserved.</div>
        </div>

    </div>
</footer>



