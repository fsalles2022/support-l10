<div class="container fw-semibold">
    <h1 class="text-center my-2 text-white">
        TradeUp Group Suporte
    </h1>
    <form action="{{ route('supports.index') }}" method="get" class="d-flex mb-4" role="search">
        <input name="filter" value="{{ $filters['filter'] ?? '' }}" class="form-control me-2" type="text"
            placeholder="Procurar Chamado" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
    </form>

    <div class="mb-4 text-center">
        <a href="{{ route('supports.create') }}" class="btn btn-primary me-2">Criar Chamado</a>
        <a href="{{ route('supports.index') }}" class="btn btn-primary">Chamados</a>
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="mb-0">Tabela de Chamados</h4>
        </div>
        <div class="card-body">
            <p class="card-text text-muted">TradeUp Group</p>
            <div class="table-responsive">
                <!-- Mensagem de Nenhum Resultado Encontrado -->
                @if ($noResults)
                    <div class="alert alert-warning text-center" role="alert">
                        Nenhum resultado encontrado para o filtro aplicado.
                    </div>
                @else
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr class="text-center">
                                <th>Foto</th>
                                <th>Nome</th>
                                <th>Assunto</th>
                                <th>Descrição</th>
                                <th>Data Criação</th>
                                <th>Status</th>
                                <th>ID</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($supports->items() as $support)
                                <tr>
                                    <td class="py-1 px-2"> <!-- Diminuindo o padding -->
                                        <img src="https://img.icons8.com/color/36/000000/administrator-male.png"
                                            alt="imagem">
                                    </td>
                                    <td class="py-1 px-2">Herman Beck</td>
                                    <td class="py-1 px-2 text-primary">{{ strtoupper($support->subject) }}</td>
                                    <td class="py-1 px-2 text-success"> {!! strtoupper($support->body) !!}</td>
                                    <td class="py-1 px-2 text-success text-center">
                                        {{ date('d/m/Y H:i', strtotime($support->created_at)) }}</td>
                                    <td class="py-1 px-2 text-center">
                                        <x-status-support :status="$support->status"></x-status-support>
                                    </td>
                                    <td class="py-1 px-2 text-success text-center">{{ $support->id }}</td>
                                    <td class="py-1 px-2">
                                        <a href="{{ route('supports.show', $support->id) }}"
                                            class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i> Verificar
                                        </a>
                                        <a href="{{ route('supports.edit', $support->id) }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                @endif
                <div class="pt-1 flex items-center justify-between">
                    <x-pagination :paginator="$supports" :appends="$filters" />
                    <h1 class="my-4">Listagem de Chamados - Total: {{ $supports->total() }}</h1>
                </div>

            </div>
        </div>
    </div>
</div>
