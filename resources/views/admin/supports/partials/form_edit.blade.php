<div class="container my-5">
    <!-- Exibe o ID do chamado -->
    <div class="mx-auto" style="max-width: 600px;">
        <h3 class="text-center text-white bg-primary p-3 rounded-3 shadow-sm">
            EDITAR CHAMADO ID: {{ $support->id }}
        </h3>

        <x-alert />

        <form action="{{ route('supports.update', $support->id) }}" method="POST" class="mt-4">
            @csrf
            @method('PUT')

            <!-- Inclui o formulário parcial -->
            @include('admin.supports.partials.form', ['support' => $support])


        </form>
    </div>
</div>
