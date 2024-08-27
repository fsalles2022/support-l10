@csrf
<input type="text" placeholder="Assunto" name="subject" value="{{ $support->subject ?? old('subject') }}">
<textarea name="body" cols="35" rows="6" placeholder="Descrição">{{ $support->body ?? old('body') }}</textarea>
<button type="submit"> Enviar</button>
