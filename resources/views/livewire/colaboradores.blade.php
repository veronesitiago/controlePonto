<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Cadastro de Colaboradores
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
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
            <button wire:click="create()"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">+ Novo</button>
            @if($isOpen)
                @include('livewire.criar-colaborador')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">Id</th>
                        <th class="px-4 py-2">Nome</th>
                        <th class="px-4 py-2">Cargo</th>
                        <th class="px-4 py-2">Nível</th>
                        <th class="px-4 py-2">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($colaboradores as $colaborador)
                    <tr>
                        <td class="border px-4 py-2">{{ $colaborador->id }}</td>
                        <td class="border px-4 py-2">{{ $colaborador->name }}</td>
                        <td class="border px-4 py-2">{{ $colaborador->cargo}}</td>
                        <td class="border px-4 py-2">{{ ($colaborador->nivel) == 1 ? 'Gestor': 'Colaborador' }}</td>
                        <td class="border px-4 py-2">
                            <button wire:click="edit({{ $colaborador->id }})"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</button>
                            <button wire:click="delete({{ $colaborador->id }})"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Excluir</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
