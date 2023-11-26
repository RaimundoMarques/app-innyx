<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mt-2">

                    <form action="/events/update/{{ $cliente->id }}" method="POST" class="form-group">
                        @csrf
                        @method('PUT')
                        <div class="container mt-1 w-50">
                            <label for="Nome" class="fs-5">
                                <strong>Nome</strong>
                            </label>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    value="{{ $cliente->nome }}" name="nome" placeholder="Nome de usuário" required>
                            </div>

                            <label for="Nome" class="fs-5">
                                <strong>CPF</strong>
                            </label>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="inputcpf"
                                    value="{{ $cliente->cpf }}" name="cpf" placeholder="CPF" required>
                            </div>

                            <label for="Nome" class="fs-5">
                                <strong>Telefone</strong>
                            </label>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="inputtelefone"
                                    value="{{ $cliente->telefone }}" name="telefone" placeholder="Telefone" required>
                            </div>

                            <label for="Nome" class="fs-5">
                                <strong>Cidade</strong>
                            </label>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    value="{{ $cliente->cidade }}" name="cidade" placeholder="Cidade" required>
                            </div>

                            <label for="Nome" class="fs-5">
                                <strong>Tipo</strong>
                            </label>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    value="{{ $cliente->tipo }}" name="tipo" placeholder="Tipo" required>
                            </div>
                            <div class="d-grid gap-2 w-25 text-center m-auto p-2">
                                <input type="submit" class="btn btn-warning fs-5" value="Editar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
