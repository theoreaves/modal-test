<x-modal formAction="update">
    <x-slot name="title">
        Hello World
    </x-slot>

    <x-slot name="content">
        Hi! 👋 {{ $counter }}
    </x-slot>

    <x-slot name="buttons" class="py-2">
        <button type="submit" class="p-4 bg-blue-500 text-white">Start counting</button>
        <button wire:click="$emit('closeModal')" class="p-4 bg-red-500 text-white">Close Modal</button>
        <button wire:click='$emit("openModal", "child-modal", @json(["name" => "Theo"]))' type="button" class="p-4 bg-green-500 text-white">Open Child</button>
    </x-slot>
</x-modal>
