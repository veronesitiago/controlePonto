<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Consultar Registros de Ponto
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

            <div class="mb-4">
                <label for="data_inicio"
                    class="block text-gray-700 text-sm font-bold mb-2">Data Início:</label>
                <input type="date"
                    class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="data_inicio" placeholder="Digite a data de início" wire:model="data_inicio" required autofocus autocomplete="data_inicio">
                @error('data_inicio') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>

            <div class="mb-4">
                <label for="data_fim"
                    class="block text-gray-700 text-sm font-bold mb-2">Data Término:</label>
                <input type="date"
                    class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="data_fim" placeholder="Digite a data de início" wire:model="data_fim" required autofocus autocomplete="data_fim">
                @error('data_fim') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>

            @if(!empty($registros))
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 w-20">Id</th>
                            <th class="px-4 py-2">Nome</th>
                            <th class="px-4 py-2">Cargo</th>
                            <th class="px-4 py-2">Idade</th>
                            <th class="px-4 py-2">Nome Gestor</th>
                            <th class="px-4 py-2">Registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($registros as $registro)
                            <tr>
                                <td class="border px-4 py-2">{{ $registro['id'] }}</td>
                                <td class="border px-4 py-2">{{ $registro['name'] }}</td>
                                <td class="border px-4 py-2">{{ $registro['cargo']}}</td>
                                <td class="border px-4 py-2">{{ $registro['idade']}}</td>
                                <td class="border px-4 py-2">{{ $registro['NomeGestor']}}</td>
                                <td class="border px-4 py-2">{{ $registro['data_registro']}}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            @else
                <div class="bg-red-300">
                    <h2>Nenhum registro encontrado</h2>
                </div>
            @endif
        </div>
    </div>
</div>
