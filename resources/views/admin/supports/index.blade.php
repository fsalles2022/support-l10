<h1> Listagem de suportes</h1>
<a href="{{  route('supports.create') }}">Pergunta ao suporte técnico</a>

<table>
    <thead>
        <th>Assunto</th>
        <th>status</th>
        <th>descrição</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($supports as $support)
            <tr>
                <td>{{ support->subject }}</td>
                <td>{{ support->status }}</td>
                <td>{{ support->body }}</td>
            </tr>
        @endforeach
    </tbody>
</table
