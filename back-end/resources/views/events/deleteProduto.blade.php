<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Deletar produto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mt-2">

                    <form action="/events/delProduto/{{ $produto->id }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    {{-- <th scope="col">#</th> --}}
                                    <th scope="col">Nome</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Preço</th>
                                    <th scope="col">Validade</th>
                                    <th scope="col">Imagem</th>
                                    <th scope="col">Deletar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    {{-- <th scope="row">{{ $paciente->id }}</th> --}}
                                    <td>{{ $produto->name }}</td>
                                    <td>{{ $produto->description }}</td>
                                    <td>{{ $produto->price }}</td>
                                    <td>{{ $produto->date_valid }}</td>
                                    <td>{{ $produto->image }}</td>
                                    <td>
                                        <button type="submit"
                                            class="btn btn-danger btn-sm text-center d-grid gap-2">Deletar</button>
                                    </td>   
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>

</x-app-layout>
