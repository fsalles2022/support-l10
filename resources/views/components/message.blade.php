<!-- Toast Container -->
<div aria-live="polite" aria-atomic="true" class="toast-container">
    @if (session()->has('message'))
        <div id="liveToast" class="toast bg-success" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <!-- Ícone Bootstrap -->
                <i class="bi bi-check-circle me-2" style="font-size: 20px; color: green;"></i>
                <strong class="me-auto">Alerta</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <p>{{ session('message') }}</p>
            </div>
        </div>
    @endif
</div>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        var toastElement = document.getElementById('liveToast');
        if (toastElement) {
            var toast = new bootstrap.Toast(toastElement, {
                autohide: true, // Automatically hide the toast
                delay: 3500 // Duration in milliseconds
            });
            toast.show();
        }
    });
</script>
