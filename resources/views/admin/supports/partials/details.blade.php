<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Detalhes do Chamado</h4>
        </div>
        <div class="card-body">
            <ul class="list-unstyled">
                <li><strong>ID:</strong> {{ $support->id }}</li>
                <li><strong>Assunto:</strong> {{ $support->subject }}</li>
                <li><strong>Descrição:</strong> {{ $support->body }}</li>
                <li><strong>Situação do Chamado:</strong> <span class="text-success">{{ $support->status }}</span>
                </li>
            </ul>
        </div>
        <div class="card-footer text-right">
            <form id="delete-form" action="{{ route('supports.destroy', $support->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" id="delete-btn" class="btn btn-danger">Excluir</button>
            </form>
            <a class="btn btn-success" href="{{ route('supports.index') }}" role="button">Voltar</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteForm = document.getElementById('delete-form');
        const deleteButton = document.getElementById('delete-btn');

        deleteButton.addEventListener('click', function(event) {
            event.preventDefault(); // Impede o envio automático do formulário

            Swal.fire({
                title: 'Tem certeza?',
                text: "Você não poderá reverter isso!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, excluir!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Se confirmado, envie o formulário
                    deleteForm.submit();
                }
            });
        });
    });
</script>
