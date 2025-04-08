<x-profile-layout>

        @error('title')

        <div class="alert alert-danger">{{ $message }}</div>

        @enderror
        @error('description')

            <div class="alert alert-danger">{{ $message }}</div>

        @enderror
        @error('example')

            <div class="alert alert-danger">{{ $message }}</div>

        @enderror

        <form class="flex flex-col" action="/page" method="POST">
            @csrf
            @method('post')

            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="@error('title') is-invalid @enderror" value="{{ old('title') }}">


            <label for="description" >Description</label>
            <textarea type="text" name="description" id="description" class="whitespace-pre-wrap @error('description') is-invalid @enderror" >{!! old('description') !!}</textarea>

            <label for="example" >Example</label>
            <input type="text" name="example" id="example" class="@error('example') is-invalid @enderror" value="{!! old('example') !!}">

            <x-button class="my-2 justify-center" type="submit">
                Submit
            </x-button>

        </form>


</x-profile-layout>

