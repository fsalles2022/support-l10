<h1>Nos informe no que podemos ajudar?{{  $support->id }}</h1>

<form action="{{  route('supports.update', $support->id) }}" method="POST">
@csrf
@method('PUT')
    <input type="text" placeholder="Assunto" name="subject" value="{{ $support->subject }}">
    <textarea name="body" cols="35" rows="6" placeholder="Descrição">{{  $support->body }}</textarea>
    <button type="submit"> Enviar</button>
</form>
<a href="{{  route('supports.index') }}">Cancelar</a>