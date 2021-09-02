<x-modal>
    <x-slot name="title">
        Hi! 👋 {{ $name }}
    </x-slot>

    <x-slot name="content">
        You are looking at a child component
    </x-slot>

    <x-slot name="buttons">
        <button wire:click="closeAndUpdateHelloWorld" class="bg-gray-900 text-white p-6">Close Modal</button>
    </x-slot>
</x-modal>
