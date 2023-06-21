<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('notes.update', $note) }}" method="POST">
                @method('put')
                @csrf
                <x-text-input type="text" name="title" placeholder="title" class="w-full" autocomplete="off" :value="@old('title', $note->title)"></x-text-input>
                @error('title')
                <div class="text-red-600 text-sm">{{ $message }}</div>
                @enderror

                <x-text-area name="text" rows="10" field="text" placeholder="Start typing here..." class="w-full mt-6" :value="@old('text', $note->text)"></x-text-area>
                <x-primary-button class="mt-6">Save Notes</x-secondary-button>
            </form>
        </div>

    </div>
</x-app-layout>