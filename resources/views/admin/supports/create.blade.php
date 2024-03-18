<h1> Novas Dúvidas?</h1>

<form action="{{  route('supports.store') }}" method="POST">
{{-- <input type="text" value="{{ csrf_token() }}" name="token"> --}}
@csrf
    <input type="text" placeholder="Assunto" name="subject">
    <textarea name="body" cols="35" rows="6" placeholder="Descrição"></textarea>
    <button type="submit"> Enviar</button>
</form>
