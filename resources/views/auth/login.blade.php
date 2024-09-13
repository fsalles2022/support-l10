<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Numans');

        html,
        body {
            /* background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg'); */
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }

        .container {
            height: 100%;
            align-content: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 100%;
            max-width: 400px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 15px;
            padding: 20px;
            position: relative;
        }

        .card-header h3 {
            color: white;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #FFC312;
        }

        .login_btn {
            color: black;
            background-color: #FFC312;
            width: 100px;
            border: none;
        }

        .login_btn:hover {
            color: black;
            background-color: white;
        }

        .cancel_btn {
            color: white;
            background-color: #FF6F61;
            width: 100px;
            border: none;
        }

        .cancel_btn:hover {
            color: white;
            background-color: #FF6F61;
            opacity: 0.8;
        }

        .text-danger {
            color: #FF6F61;
        }

        .forgot-password {
            color: white;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Login</h3>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email" class="text-white">Email</label>
                    <input id="email" type="email" class="form-control" name="email" :value="old('email')"
                        required autofocus autocomplete="username">
                    @error('email')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password" class="text-white">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required
                        autocomplete="current-password">
                    @error('password')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="form-group form-check">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-check-label text-white">Remember me</label>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ url('/') }}" class="btn cancel_btn">Cancelar</a>
                    <button type="submit" class="btn login_btn">Log in</button>
                </div>

                @if (Route::has('password.request'))
                    <div class="mt-4">
                        <a class="forgot-password" href="{{ route('password.request') }}">Esquece a senha?</a>
                    </div>
                @endif
            </form>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
