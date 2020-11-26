<div class="p-6 sm:px-20 bg-white border-b border-gray-200">

    <div class="mt-8 text-2xl">
        Registre seu Ponto
    </div>

    <div class="mt-4 text-gray-300">
        {{ $message }}
        <x-jet-button class="ml-2" wire:click="registrar" wire:loading.attr="disabled">
            Registrar
        </x-jet-button>

    </div>
</div>
