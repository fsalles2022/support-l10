<aside <x-alert />

<form action="{{ route('supports.update', $support->id) }}" method="POST">
    @method('PUT')
    @include('admin.supports.partials.form', [
        'support' => $support,
    ])
</form>ID do chamado: {{ $support->id }}</br>
<a href="{{ route('supports.index') }}">Cancelar</a>
