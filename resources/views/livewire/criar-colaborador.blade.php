<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>?
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label for="name"
                                class="block text-gray-700 text-sm font-bold mb-2">Nome:</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name" placeholder="Digite o nome" wire:model="name" required autofocus autocomplete="name">
                            @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="data_nascimento"
                                class="block text-gray-700 text-sm font-bold mb-2">Data de Nascimento:</label>
                            <input type="date"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="data_nascimento" placeholder="Digite a data de nascimento" wire:model="data_nascimento" required autofocus autocomplete="data_nascimento">
                            @error('data_nascimento') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        <div class="mb-4">
                            <label for="cpf"
                                class="block text-gray-700 text-sm font-bold mb-2">CPF:</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="cpf" placeholder="Digite o CPF" wire:model="cpf" pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}" tittle="Digite um CPF no formato: xxx.xxx.xxx-xx" autofocus>
                            @error('cpf') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="cargo"
                                class="block text-gray-700 text-sm font-bold mb-2">Nível:</label>
                                <select name="nivel" wire:model="nivel" 
                                    class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                                    <option value=''>Selecione o nível de acesso</option>
                                        <option value="1">Gestor</option>
                                        <option value="2">Colaborador</option>
                                </select>
                                @error('cargo') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        <div class="mb-4">
                            <label for="cargo"
                                class="block text-gray-700 text-sm font-bold mb-2">Cargo:</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="cargo" placeholder="Digite o cargo" wire:model="cargo" required autofocus autocomplete="cargo">
                            @error('cargo') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="email"
                                class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                            <input type="email"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" placeholder="Digite o email" wire:model="email">
                            @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="cep"
                                class="block text-gray-700 text-sm font-bold mb-2">Cep:</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="cep" placeholder="Digite o cep" wire:model="cep" maxlength="8" pattern="\d{8}" tittle="Digite somente números">
                            @error('cep') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        <div class="mb-4">
                            <label for="endereco"
                                class="block text-gray-700 text-sm font-bold mb-2">Endereço:</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="endereco" name="endereco" value="{{ $endereco }}" required>
                            @error('endereco') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="password"
                                class="block text-gray-700 text-sm font-bold mb-2">Senha:</label>
                            <input type="password"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="password" placeholder="Digite a senha" wire:model="password">
                            @error('password') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="password_confirmation"
                                class="block text-gray-700 text-sm font-bold mb-2">Confirme a Senha:</label>
                            <input type="password"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="password_confirmation" placeholder="Confirme a senha" wire:model="password_confirmation">
                            @error('password_confirmation') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button"
                            class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Save
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModal()" type="button"
                            class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Cancel
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>