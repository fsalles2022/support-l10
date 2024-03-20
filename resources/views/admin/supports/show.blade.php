<h1> Detalhes do chamado</h1>

<ul>
<li>ID: {{ $support->id }}</li>
<li>Assunto: {{ $support->subject }}</li>
<li>Descrição: {{ $support->body }}</li>
<li style="color:green">Situação do chamado: {{ $support->status }}</li>
</ul>
<a href="{{ route('supports.index') }}">Voltar<a>

<form action="{{  route('supports.destroy', $support->id) }}" method="POST">
@csrf
@method('DELETE')
<button type="submit">excluir</button>
</form>