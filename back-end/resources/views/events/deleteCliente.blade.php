<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Excluindo Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mt-2">

                    <form action="/events/{{ $cliente->id }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    {{-- <th scope="col">#</th> --}}
                                    <th scope="col">Nome</th>
                                    <th scope="col">CPF</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Cidade</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Deletar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    {{-- <th scope="row">{{ $cliente->id }}</th> --}}
                                    <td>{{ $cliente->nome }}</td>
                                    <td>{{ $cliente->cpf }}</td>
                                    <td>{{ $cliente->telefone }}</td>
                                    <td>{{ $cliente->cidade }}</td>
                                    <td>{{ $cliente->tipo }}</td>
                                    <td>
                                        <button type="submit" class="btn btn-danger btn-sm text-center d-grid gap-2">Deletar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>

</x-app-layout>
