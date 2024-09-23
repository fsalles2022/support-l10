<div class="container-fluid fw-semibold">
    <h1 class="text-center my-2 text-white" style="font-size: 2.5rem; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">
        TradeUp Group Suporte
    </h1>
    <form action="{{ route('supports.index') }}" method="get" class="d-flex mb-4" role="search">
        <input name="filter" value="{{ $filters['filter'] ?? '' }}" class="form-control me-2" type="text"
            placeholder="Procurar Chamado" aria-label="Search" style="border-radius: 20px;">
        <button class="btn btn-success" type="submit" style="border-radius: 20px;">Pesquisar</button>
    </form>

    <div class="mb-4 text-center">
        <a href="{{ route('supports.create') }}" class="btn"
            style="background-color: #0056b3; color: white; border-radius: 20px;">Criar Chamado</a>
        <a href="{{ route('supports.index') }}" class="btn"
            style="background-color: #0056b3; color: white; border-radius: 20px;">Tickets</a>
    </div>

    <div class="card" style="border-radius: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
        <div class="card-header" style="background-color: #343a40; border-radius: 15px 15px 0 0;">
            <h4 class="mb-0 text-center" style="color: white;">Tabela de Chamados</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if ($noResults)
                    <div class="alert alert-warning text-center" role="alert">
                        Nenhum resultado encontrado para o filtro aplicado.
                    </div>
                @else
                    <table class="table table-striped" style="border-radius: 10px; overflow: hidden;">
                        <thead style="background-color: #007bff; color: white;">
                            <tr class="text-center">
                                <th>Foto</th>
                                <th>Nome Usuário</th>
                                <th>Assunto</th>
                                <th>Descrição</th>
                                <th>Data Criação</th>
                                <th>Modificado</th>
                                <th>Status</th>
                                <th>ID</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($supports->items() as $support)
                                <tr class="text-center">
                                    <td class="mx-2">
                                        <img src="https://img.icons8.com/color/36/000000/administrator-male.png"
                                            alt="imagem">
                                    </td>
                                    <td class="mx-2">{{ $support->name ?? 'N/A' }}</td>
                                    <td class="mx-2 text-primary">{!! strtoupper($support->subject) !!}</td>
                                    <td class="mx-2 text-success">{!! strtoupper($support->body) !!}</td>
                                    <td class="mx-2 text-center">
                                        {{ date('d/m/Y H:i', strtotime($support->created_at)) }}</td>
                                    <td class="mx-2 text-center">
                                        {{ date('d/m/Y H:i', strtotime($support->updated_at)) }}</td>
                                    <td class="mx-2 text-center">
                                        <x-status-support :status="$support->status"></x-status-support>
                                    </td>
                                    <td class="mx-2 text-center">{{ $support->id }}</td>

                                    <td class="mx-2  text-center">
                                        <a href="{{ route('supports.show', $support->id) }}" class="btn btn-sm"
                                            style="background-color: #151f20; color: white; border-radius: 20px; margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Verificar
                                        </a>
                                        <a href="{{ route('supports.edit', $support->id) }}" class="btn btn-sm"
                                            style="background-color: #baa260; color: white; border-radius: 20px;">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif


            </div>
        </div>
        <div class="card-header mx-2" style="background-color: #343a40; border-radius: 0 0 15px 15px;">
            <div class="p-1 d-flex justify-content-between align-items-center my-2 rounded"
                style="background-color: #343a40;">
                <div>
                    <x-pagination :paginator="$supports" :appends="$filters" />
                </div>
                <h1 class="my-0 fs-6 " style="color: white;">Total de Chamados - Total: {{ $supports->total() }}
                </h1>
            </div>
        </div>
    </div>
</div>
