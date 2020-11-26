<div class="p-6 sm:px-20 bg-white border-b border-gray-200">

    <div class="mt-8 text-2xl">
        Registre seu Ponto
    </div>

    <div class="mt-4 text-gray-300">
        @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
        @endif
        <x-jet-button class="ml-2" wire:click.prevent="store()" wire:loading.attr="disabled">
            Registrar
        </x-jet-button>

    </div>
</div>
