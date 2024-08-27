<h1>Nos informe no que podemos ajudar?{{ $support->id }}</h1>

<x-alert />

<form action="{{ route('supports.update', $support->id) }}" method="POST">
    @method('PUT')
    @include('admin.supports.partials.form', [
        'support' => $support,
    ])
</form>
<a href="{{ route('supports.index') }}">Cancelar</a>
