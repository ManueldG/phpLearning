@props(['submit'])

<div {{ $attributes->merge(['class' => 'flex flex-col']) }}>

    <x-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description ?? "" }}</x-slot>
    </x-section-title>

    <form wire:submit="{{ $submit }}">
        @method('GET')
        @csrf

        <div class="{{ isset($actions) ? '' : '' }}">
        </div>
        {{ $form }}

        @if (isset($actions))

            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-end sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                {{ $actions }}
            </div>
        @endif

    </form>

</div>
