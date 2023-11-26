<x-app-layout>
    <x-slot name="header">
        <div class="row text-center">
            <div class="col-md-12">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Cadastrar Cliente') }}
                </h2>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mt-4">

                    <form action="/createCliente" method="POST">
                        <div class="container w-50">
                            @csrf

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="inputname" name="nome"
                                    placeholder="Nome de usuário" required>
                                <label for="inputname" class="text-muted">Nome</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="inputcpf" name="cpf"
                                    placeholder="Nome de usuário" required>
                                <label for="inputcpf" class="text-muted">CPF</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="inputtelefone" name="telefone"
                                    placeholder="Nome de usuário" required>
                                <label for="inputtelefone" class="text-muted">Telefone</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="cidade"
                                    placeholder="Nome de usuário" required>
                                <label for="floatingInput" class="text-muted">Cidade</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="tipo"
                                    placeholder="Nome de usuário" required>
                                <label for="floatingInput" class="text-muted">Tipo</label>
                            </div>

                            <div class="d-grid gap-2 mx-auto mt-4 mb-4">
                                <input type="submit" class="btn btn-primary" value="Cadastrar">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

</x-app-layout>
