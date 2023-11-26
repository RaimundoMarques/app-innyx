<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        * {
            font-family: 'Roboto';
        }

        .titulos {
            text-align: center;
            font-size: 18pt;
            padding: 15px;
        }

        thead,
        tr,
        th {
            text-align: left;
        }

        tbody,
        tr,
        td {
            text-align: left;
        }
    </style>
</head>

<body>

    <div class="titulos">Lista de clientes</div>

    <table class="table table-striped">

        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th scope="col">Cidade</th>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cliente as $item)
                <tr>
                    <td>{{ $item->nome }}</td>
                    <td>{{ $item->cpf }}</td>
                    <td>{{ $item->telefone }}</td>
                    <td>{{ $item->cidade }}</td>
                    <td>{{ $item->tipo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <hr>

    <div class="titulos">Lista de produtos</div>

    <table class="table table-striped">

        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço</th>
                <th scope="col">Validade</th>
                <th scope="col">Imagem</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produto as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->date_valid }}</td>
                    <td>{{ $item->image }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
