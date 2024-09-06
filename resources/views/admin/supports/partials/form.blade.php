@csrf
<div class="container" style="max-width: 400px; margin: 0 auto;">
    <label class="form-label" for="subject">Assunto</label>
    <div class="form-outline" data-mdb-input-init>
        <input type="text" id="subject" class="form-control" name="subject"
            value="{{ $support->subject ?? old('subject') }}" />

    </div>

    <div class="form-outline" data-mdb-input-init>
        <label class="form-label" for="body">Mensagem</label>

    </div>

    <div class="mb-3">
        <textarea class="form-control" id="body" rows="3" name="body">{{ $support->body ?? old('body') }}</textarea>
    </div>


    <div class="my-2">
        <button type="submit"> Enviar</button>
        <a href="{{ route('supports.index') }}">Cancelar</a>
    </div>
</div>
</div>
