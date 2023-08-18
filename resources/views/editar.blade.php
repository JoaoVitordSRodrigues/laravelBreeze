<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form method="POST" class="bg-white w-92" action="/atualizar/{{$cliente->id}}">
                        @csrf
                        @method("PUT")

                        <!-- Name -->
                        <div>
                            <x-input-label for="nome" :value="__('Nome')" />
                            <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" value="{{$cliente->nome}}" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('nome')" class="mt-2" /> 
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="endereco" :value="__('Endereco')" />
                            <x-text-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco')" value="{{$cliente->endereco}}" required/>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="bairro" :value="__('Bairro')" />
                            <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')" value="{{$cliente->bairro}}" required/>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="cep" :value="__('CEP')" />
                            <x-text-input id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" value="{{$cliente->cep}}" required/>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="cidade" :value="__('Cidade')" />
                            <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade')" value="{{$cliente->cidade}}" required/>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="estado" :value="__('Estado')" />
                            <x-text-input id="estado" class="block mt-1 w-full" type="text" name="estado" :value="old('estado')" value="{{$cliente->estado}}" required/>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Editar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>