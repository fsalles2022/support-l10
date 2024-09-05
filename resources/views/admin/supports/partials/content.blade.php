<div class="container">
    <h1>Listagem de Chamados - Total: {{ $supports->total() }}</h1>

    <form action="{{ route('supports.index') }}" method="get" class="d-flex" role="search">
        <input name="filter" value="{{ $filters['filter'] ?? '' }}" class="form-control me-2" type="text"
            placeholder="Procurar Chamado" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
    </form>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 align-center pb-2">
                <a href="{{ route('supports.create') }}" class="btn btn-primary">Criar Chamado</a>
            </div>
        </div>
    </div>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basic Striped Table</h4>
                            <p class="card-description">
                                Basic stripped table example
                            </p>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>
                                                Foto
                                            </th>
                                            <th>
                                                Nome
                                            </th>
                                            <th>
                                                Assunto
                                            </th>
                                            <th>
                                                Descrição
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Ações
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($supports->items() as $support)
                                            <tr>
                                                <td class="py-1">
                                                    <img src="https://img.icons8.com/color/36/000000/administrator-male.png"
                                                        alt="image">
                                                </td>
                                                <td>
                                                    Herman Beck
                                                </td>
                                                <td style="color:blue;">{{ $support->subject }} </td>
                                                <td style="color:rgb(52, 173, 19);">{{ $support->body }} </td>
                                                <td style="color:green;text-align:center;">
                                                    {{ getStatusSupport($support->status) }} </td>
                                                <td style="color:rgb(52, 173, 19);">{{ $support->id }} </td>
                                                <td>
                                                    <a href="{{ route('supports.show', $support->id) }}"> Verificar</a>
                                                    <a href="{{ route('supports.edit', $support->id) }}"> Editar</a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <x-pagination :paginator="$supports" :appends="$filters" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
