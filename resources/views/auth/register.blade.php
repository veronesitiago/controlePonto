<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="cpf" value="{{ __('Cpf') }}" />
                <x-jet-input id="cpf" class="block mt-1 w-full" type="text" pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}" tittle="Digite um CPF no formato: xxx.xxx.xxx-xx" name="cpf" :value="old('cpf')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="data_nascimento" value="{{ __('Data Nascimento') }}" />
                <x-jet-input id="data_nascimento" class="block mt-1 w-full" type="date" name="data_nascimento" :value="old('data_nascimento')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="cargo" value="{{ __('Cargo') }}" />
                <x-jet-input id="cargo" class="block mt-1 w-full" type="text" name="cargo" :value="old('cargo')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="cep" value="{{ __('Cep') }}" />
                <x-jet-input id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="endereco" value="{{ __('Endereco') }}" />
                <x-jet-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
