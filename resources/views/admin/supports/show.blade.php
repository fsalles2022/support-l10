<h1> Detalhes do chamado</h1>

<ul>
<li>ID: {{ $support->id }}</li>
<li>Assunto: {{ $support->subject }}</li>
<li>Descrição: {{ $support->body }}</li>
<li style="color:green">Situação do chamado: {{ $support->status }}</li>
</ul>
<a href="{{ route('supports.index') }}">Voltar<a>