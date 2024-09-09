<form method="POST" action="{{ route('supports.store') }}">
    @csrf
    <div class="container my-5" style="max-width: 600px;">
        <!-- Assunto -->
        <div class="mb-4">
            <label class="form-label" for="subject">Assunto</label>
            <input type="text" id="subject" class="form-control form-control-lg" name="subject"
                value="{{ $support->subject ?? old('subject') }}" required />
            <!-- Mensagens de erro -->
            @error('subject')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Mensagem -->
        <div class="mb-4">
            <label class="form-label" for="body">Mensagem</label>
            <textarea class="form-control form-control-lg" id="body" rows="4" name="body" required>{{ $support->body ?? old('body') }}</textarea>
            <!-- Mensagens de erro -->
            @error('body')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-between mt-4">
            <button type="submit" class="btn btn-primary btn-lg w-100 me-2">Criar Chamado</button>
            <a href="{{ route('supports.index') }}" class="btn btn-secondary btn-lg w-100 ms-2">Cancelar</a>
        </div>
    </div>
</form>
