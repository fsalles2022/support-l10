<div class="container mt-2">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Detalhes do Chamado: {{ $support->id }}</h4>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li><strong>ID:</strong> {{ $support->id }}</li>
                <li><strong>Assunto:</strong> {{ $support->subject }}</li>
                <li><strong>Descrição:</strong> {!! $support->body !!}</li>
                <li><strong>Situação do Chamado:</strong> <span class="text-success">{{ $support->status }}</span>
                </li>
            </ul>
        </div>
        <div class="card-footer text-end">
            <!-- Formulário de Exclusão -->
            <form id="delete-form" action="{{ route('supports.destroy', $support->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" id="delete-btn" class="btn btn-danger">
                    <i class="fas fa-trash"></i> Excluir
                </button>

            </form>
            <a class="btn btn-warning ms-2" href="{{ route('supports.edit', $support->id) }}" role="button"><i
                    class="fas fa-edit"></i>Editar</a>
            <!-- Botão Voltar -->
            <a class="btn btn-success ms-2" href="{{ route('supports.index') }}" role="button">
                <i class="fas fa-arrow-left"></i> Voltar
            </a>


            <!-- Formulário de Pesquisa -->
            <form action="{{ route('supports.index') }}" method="get" class="d-inline ms-2 " role="search">
                <div class="input-group mt-4">
                    <!-- Input de Pesquisa -->
                    <input name="filter" value="{{ $filters['filter'] ?? '' }}" class="form-control" type="text"
                        placeholder="Procurar Chamado" aria-label="Search">
                    <!-- Botão de Pesquisa -->
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </div>
            </form>
        </div>
    </div>
</div>
