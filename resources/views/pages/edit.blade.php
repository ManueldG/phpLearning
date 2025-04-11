
<x-profile-layout :class="' w-full h-full '">

    <form class="flex flex-col" action="/page/{{ $page->id }}" method="POST">

        @csrf
        @method('put')

        @error('title')

        <div class="text-red-600">{{ $message }}</div>

        @enderror

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') ?? $page->title }}"  class="@error('title') is-invalid @enderror">

        @error('description')

            <div class="text-red-600">{{ $message }}</div>

        @enderror
        <label for="description" >Description</label>
        <textarea type="text" name="description" id="description" rows="10" cols="10" class="@error('description') is-invalid @enderror">{{ old('description') ?? $page->description }}</textarea>

        @error('example')

        <div class="text-red-600">{{ $message }}</div>

        @enderror
        <label for="example" >Example</label>
        <textarea type="text" name="example" id="example" rows="10" cols="10" class="@error('example') is-invalid @enderror">{{ old('example') ?? $page->example }}</textarea>

        <x-button class="my-2 justify-center" type="submit">
            Submit
        </x-button>

    </form>


</x-profile-layout>
