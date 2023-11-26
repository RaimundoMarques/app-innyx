<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Produto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mt-2">

                    <form action="/events/updateProduto/{{ $produto->id }}" method="POST" class="form-group">
                        @csrf
                        @method('PUT')
                        <div class="container mt-1 w-50">
                            <label for="Nome" class="fs-5">
                                <strong>Nome</strong>
                            </label>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    value="{{ $produto->name }}" name="name" placeholder="Nome de produto" required>
                            </div>

                            <label for="Tipo" class="fs-5">
                                <strong>Descrição</strong>
                            </label>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    value="{{ $produto->description }}" name="description" placeholder="Descrição"
                                    required>
                            </div>

                            <label for="Preço" class="fs-5">
                                <strong>Preço</strong>
                            </label>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    value="{{ $produto->price }}" name="price" placeholder="Preço" required>
                            </div>

                            <label for="Data de validade" class="fs-5">
                                <strong>Data de validade</strong>
                            </label>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    value="{{ date('d-m-Y', strtotime($produto->date_valid)) }}" name="date_valid"
                                    placeholder="Validade" required>
                            </div>


                            <label for="Imagem" class="fs-5">
                                <strong>Imagem</strong>
                            </label>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    value="{{ $produto->image }}" name="image"
                                    placeholder="Validade" required>
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
