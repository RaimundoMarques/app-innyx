<x-app-layout>
    <x-slot name="header">
        <div class="row text-center">
            <div class="col-md-12">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Cadastrar Protudo') }}
                </h2>
            </div>
        </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mt-4">

                    <form action="/createProduto" method="POST">
                        <div class="container w-75">
                            @csrf

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="name"
                                            placeholder="Nome de Produto" required>
                                        <label for="floatingInput" class="text-muted">Nome do produto</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="price"
                                            placeholder="price" required>
                                        <label for="floatingInput" class="text-muted">Preço</label>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="description"
                                            placeholder="description" required>
                                        <label for="floatingInput" class="text-muted">Descrição</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="floatingInput" name="date_valid"
                                            placeholder="date_valid" required>
                                        <label for="floatingInput" class="text-muted">Data de validade</label>
                                    </div>
                                </div>

                                <div class="col-sm-6 m-auto">
                                    <div class="form-floating mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="date_valid"
                                                value="" id="flexCheckIndeterminate" disabled>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Data de validade não se aplica
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6 m-auto">Imagem
                                    <div class="form-floating mb-3">
                                        <input type="file" class="form-control" id="image" name="image"
                                            placeholder="image" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 m-auto">
                                    <div class="form-floating mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="date_valid"
                                                value="" id="flexCheckIndeterminate" disabled>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Produto não possui imagem
                                            </label>
                                        </div>
                                    </div>
                                </div>
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
