<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('tilte') - {{ config('app.name') }}</title>
    @vite('resources/css/style.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <divclass="container">
    <header>
        <div class="content m-4">
            @yield('nav')
        </div><i class="fa fa-vcard" aria-hidden="true"></i>
    </header>
    </br>
    </br>

    <body>
        <div class="content">
            @yield('content')
        </div>
    </body>

    <footer>
        <div class="content">
            @yield('content-footer')
        </div>
    </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
