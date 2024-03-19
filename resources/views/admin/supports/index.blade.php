<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
</head>

<body>

    <h1>Listagem de suportes</h1>
    <a href="{{ route('supports.create') }}">Criar Chamado</a>

    <table>
        <thead>
            <tr>

                <th>Assunto</th>
                <th>Descrição</th>
                <th>Status</th>
                <hr>
                <th>id</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($supports as $support)
                <tr>

                    <td>{{ $support->subject }}</td>
                    <td>{{ $support->body }}</td>
                    <td style="color:green">{{ $support->status }}</td>
                    <td>{{ $support->id }}</td>
                    <td>
                        <a href="{{ route('supports.show', $support->id) }}"> Verificar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    

</body>

</html>
