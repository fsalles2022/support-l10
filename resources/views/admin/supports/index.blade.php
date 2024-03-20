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

                    <td style="color:blue;">{{ $support->subject }}-</td>
                    <td style="color:red;">{{ $support->body }}</td>
                    <td style="color:green;">{{ $support->status }}-</td>
                    <td>{{ $support->id }}</td>
                    <td>
                        <a href="{{ route('supports.show', $support->id) }}"> Verificar</a>
                        <a href="{{ route('supports.edit', $support->id) }}"> Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    

</body>

</html>
