<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('tilte') - {{ config('app.name') }}</title>
    {{-- @vite('resources/css/style.css')
    @vite('resources/css/styleLogin.css') --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link
        rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/styleLogin.css">
</head>

<body style="background-color: rgb(23, 22, 22)">
    <header>
        <div class="content m-4">
            @yield('nav')
        </div>
    </header>
    </br>
    </br>

    <body>
        <div class="content">
            <x-message />
            @yield('content')
        </div>
    </body>

    <footer>
        <div class="content">
            @yield('content-footer')
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
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
</body>

</html>
