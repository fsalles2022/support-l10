<h1>Nos informe no que podemos ajudar?</h1>

<form action="{{  route('supports.store') }}" method="POST">
@csrf
    <input type="text" placeholder="Assunto" name="subject">
    <textarea name="body" cols="35" rows="6" placeholder="Descrição"></textarea>
    <button type="submit"> Enviar</button>
</form>
<a href="{{  route('supports.index') }}">Cancelar</a>

