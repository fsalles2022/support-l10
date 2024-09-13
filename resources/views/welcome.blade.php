<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #f3f4f6, #e5e7eb);
            font-family: 'Figtree', sans-serif;
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .card img {
            transition: opacity 0.3s ease;
        }

        .card img:hover {
            opacity: 0.8;
        }

        .btn-primary {
            background-color: #FF2D20;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #e60014;
        }

        .btn-secondary {
            background-color: #6B7280;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #4B5563;
        }

        .card-header {
            font-size: 1.25rem;
            font-weight: bold;
            color: #1F2937;
        }

        .card-body {
            color: #4B5563;
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative min-h-screen bg-gray-100 dark:bg-gray-900 flex items-center justify-center">
        @if (Route::has('login'))
            <div class="fixed top-0 right-0 p-6 text-right">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center mb-12">
                <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto">
                    <path
                        d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2603 7.03694 49.4118 7.12434L61.3876 14.4208C61.5361 14.5026 61.6601 14.6282 61.7434 14.7904C61.8248 14.9464 61.8684 15.1226 61.8548 15.3087V14.6253Z"
                        fill="currentColor" />
                </svg>
            </div>

            <div class="text-center">
                <h1 class="text-5xl font-extrabold text-gray-900 dark:text-white mb-4">Bem-vindo à TradeUp Group</h1>
                <p class="text-lg text-gray-700 dark:text-gray-400 mb-8">Este é o seu ponto de partida para criar
                    uma conexão incrível conosco!</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                    <div class="card bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-transform">
                        <img src="https://www.tradeupgroup.com/wp-content/uploads/2021/10/logo-SIV.png"
                            alt="Placeholder Image" class="w-30 h-32 object-cover rounded-md mb-4">
                        <h2 class="card-header">SIV</h2>
                        <p class="card-body">Descrição curta da seção 1. Pode incluir informações úteis para o usuário.
                        </p>
                        <a href="#" class="btn-primary mt-4 inline-block">Saiba Mais</a>
                    </div>
                    <div class="card bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-transform">
                        <img src="https://www.tradeupgroup.com/wp-content/uploads/2021/10/logo-TAO.png"
                            alt="Placeholder Image" class="w-30 h-32 object-cover rounded-md mb-4">
                        <h2 class="card-header">TradeAPP One</h2>
                        <p class="card-body">Descrição curta da seção 2. Pode incluir informações úteis para o usuário.
                        </p>
                        <a href="#" class="btn-secondary mt-4 inline-block">Saiba Mais</a>
                    </div>
                    <div class="card bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-transform">
                        <img src="https://www.tradeupgroup.com/wp-content/uploads/2021/10/logo-ANALYTICS.png"
                            alt="Placeholder Image" class="w-30 h-32 object-cover rounded-md mb-4">
                        <h2 class="card-header">TradeUP Analytics</h2>
                        <p class="card-body">Descrição curta da seção 3. Pode incluir informações úteis para o usuário.
                        </p>
                        <a href="#" class="btn-primary mt-4 inline-block">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
