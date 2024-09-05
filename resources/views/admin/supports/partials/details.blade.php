<div class="container">
    <h1> Detalhes do chamado</h1>

    <ul>
        <li>ID: {{ $support->id }}</li>
        <li>Assunto: {{ $support->subject }}</li>
        <li>Descrição: {{ $support->body }}</li>
        <li style="color:green">Situação do chamado: {{ $support->status }}</li>
    </ul>


    <form action="{{ route('supports.destroy', $support->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger">Excluir</button>
        <a class="btn btn-outline-success" href="{{ route('supports.index') }}" role="button">Voltar</a>

    </form>
</div>
