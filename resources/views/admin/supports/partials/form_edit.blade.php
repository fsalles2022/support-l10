<div class="container">
    <!-- Exibe o ID do chamado -->
    <div class="mx-4">
        <h3 class="text-center text-white underline">
            CHAMADO ID: {{ $support->id }}
        </h3>

        <x-alert />


        <form action="{{ route('supports.update', $support->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Inclui o formulário parcial -->
            @include('admin.supports.partials.form', ['support' => $support])
        </form>
    </div>
</div>
