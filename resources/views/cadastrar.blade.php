<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" class="bg-white w-92" action="{{ route('cadastrar') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="nome" :value="__('Nome')" />
                            <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('nome')" class="mt-2" /> 
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="endereco" :value="__('Endereco')" />
                            <x-text-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco')" required/>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="bairro" :value="__('Bairro')" />
                            <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')" required/>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="cep" :value="__('CEP')" />
                            <x-text-input id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required/>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="cidade" :value="__('Cidade')" />
                            <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade')" required/>
                        </div>
                        <!--Opções dos estados do combobox-->
                        @php
                        $estados = [
                            'AC' => 'Acre',
                            'AL' => 'Alagoas',
                            'AP' => 'Amapá',
                            'AM' => 'Amazonas',
                            'BA' => 'Bahia',
                            'CE' => 'Ceará',
                            'DF' => 'Distrito Federal',
                            'ES' => 'Espírito Santo',
                            'GO' => 'Goiás',
                            'MA' => 'Maranhão',
                            'MT' => 'Mato Grosso',
                            'MS' => 'Mato Grosso do Sul',
                            'MG' => 'Minas Gerais',
                            'PA' => 'Pará',
                            'PB' => 'Paraíba',
                            'PR' => 'Paraná',
                            'PE' => 'Pernambuco',
                            'PI' => 'Piauí',
                            'RJ' => 'Rio de Janeiro',
                            'RN' => 'Rio Grande do Norte',
                            'RS' => 'Rio Grande do Sul',
                            'RO' => 'Rondônia',
                            'RR' => 'Roraima',
                            'SC' => 'Santa Catarina',
                            'SP' => 'São Paulo',
                            'SE' => 'Sergipe',
                            'TO' => 'Tocantins'
                        ];
                        @endphp
                        <div class="mt-4">
                            <x-input-label for="estado" :value="__('Estado')" />
                            <select id="estado" name="estado" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                <option value="" disabled selected>Selecione um estado</option>
                                @foreach ($estados as $sigla => $nome)
                                    <option value="{{ $sigla }}" {{ old('estado') === $sigla ? 'selected' : '' }}>{{ $nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    
                        <div class="flex items-center justify-end mt-4 blue">
                            <x-primary-button class="bg-blue-500 transition-all p-3 rounded" onclick="verificarCampos()">
                                {{ __('Cadastrar') }}
                            </x-primary-button>
                            <script>
                                function verificarCampos() {
                                    var nome = document.getElementById('nome').value;
                                    var endereco = document.getElementById('endereco').value;
                                    var bairro = document.getElementById('bairro').value;
                                    var cep = document.getElementById('cep').value;
                                    var cidade = document.getElementById('cidade').value;
                                    var estado = document.getElementById('estado').value;

                                    if (nome && endereco && bairro && cep && cidade && estado) {
                                        msgDadosCadastrados();
                                    } else {
                                        alert("Por favor, preencha todos os campos obrigatórios.");
                                    }
                                }
                                function msgDadosCadastrados() {
                                    alert("Dados cadastrados!");
                                }
                            </script>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>
