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
                                <td class="p-3 bg-slate-100 border border-blue-300">{{$cliente->nome}}</td>
                                <td class="p-3 bg-slate-100 border border-blue-300">{{$cliente->endereco}}</td>
                                <td class="p-3 bg-slate-100 border border-blue-300">{{$cliente->bairro}}</td>
                                <td class="p-3 bg-slate-100 border border-blue-300">{{$cliente->cep}}</td>
                                <td class="p-3 bg-slate-100 border border-blue-300">{{$cliente->cidade}}</td>
                                <td class="p-3 bg-slate-100 border border-blue-300">{{$cliente->estado}}</td>
                                <td class="p-3 bg-slate-100 border border-blue-300">
                                <a href="{{url("editar/$cliente->id")}}" class="hover:bg-blue-500 transition-all p-3 rounded">Editar</a>
                                <form action="excluir/{{$cliente->id}}" method="POST">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" href="{{url("excluir/$cliente->id")}}" class="hover:bg-red-500 transition-all p-3 rounded">Excluir</button>
                                </form>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
