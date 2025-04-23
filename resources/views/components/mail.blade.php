<x-profile-layout>

    @if (session('status'))

        <div class="text-green-500">{{ __(session('status')) }}</div>

    @endif

    @error('title')

    <div class="alert alert-danger">{{ $message }}</div>

    @enderror
    @error('description')

        <div class="alert alert-danger">{{ $message }}</div>

    @enderror
    @error('example')

        <div class="alert alert-danger">{{ $message }}</div>

    @enderror

    <form class="flex flex-col" action="{{ route('mail.send') }}" method="POST">
        @csrf
        @method('post')

        <select name="to" id="to">

            @foreach ($users as $user)

                <option value="{{ $user->email }}">
                    {{ $user->name }}

                </option>

            @endforeach

        </select>

        <label for="subject">{{ ('Subject') }}</label>
        <input type="text" name="title" id="title" class="@error('title') is-invalid @enderror" value="{{ old('subject') }}">


        <label for="message" >{{ __('Message') }}</label>
        <input type="text" name="message" id="message" class="@error('description') is-invalid @enderror" value="{{ old('message') }}">


        <x-button class="my-2 justify-center" type="submit">
            Submit
        </x-button>

    </form>


</x-profile-layout>

