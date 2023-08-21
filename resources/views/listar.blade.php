<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listar clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100 border-b border-gray-100lg">
                <div class="p-6 text-gray-900">
                    <table class="min-w-full border-collapse border border-gray-300">
                        <thead class="">
                            <tr>
                                <th class="p-3 bg-blue-100 border border-blue-300 bg-red">Nome</th>
                                <th class="p-3 bg-blue-100 border border-blue-300">Endereço</th>
                                <th class="p-3 bg-blue-100 border border-blue-300">Bairro</th>
                                <th class="p-3 bg-blue-100 border border-blue-300">CEP</th>
                                <th class="p-3 bg-blue-100 border border-blue-300">Cidade</th>
                                <th class="p-3 bg-blue-100 border border-blue-300">Estado</th>
                                <th class="p-3 bg-blue-100 border border-blue-300">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <td class="p-3 bg-slate-100 border border-blue-300 text-center">{{$cliente->nome}}</td>
                                <td class="p-3 bg-slate-100 border border-blue-300 text-center">{{$cliente->endereco}}</td>
                                <td class="p-3 bg-slate-100 border border-blue-300 text-center">{{$cliente->bairro}}</td>
                                <td class="p-3 bg-slate-100 border border-blue-300 text-center">{{$cliente->cep}}</td>
                                <td class="p-3 bg-slate-100 border border-blue-300 text-center">{{$cliente->cidade}}</td>
                                <td class="p-3 bg-slate-100 border border-blue-300 text-center">{{$cliente->estado}}</td>
                                <td class="p-3 bg-slate-100 border border-blue-300 flex flex-col items-center">
                                    <a href="{{url("editar/$cliente->id")}}" class="bg-blue-500 transition-all p-3 rounded">Editar</a>
                                    <div class="h-2"></div> <!-- Espaço vertical -->
                                    <form action="excluir/{{$cliente->id}}" method="POST">
                                        @csrf
                                        @method("delete")
                                        <button type="button" class="bg-red-500 transition-all p-3 rounded" onclick="confirmExcluir()">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                            <script>
                                function confirmExcluir() {
                                    if (confirm("Tem certeza que deseja excluir este cadastro?")) {
                                        // Submeta o formulário para realizar a exclusão
                                        event.target.closest("form").submit();
                                    }
                                }
                            </script>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
