<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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

        .btn-primary {
            color: black;
            background-color: #FFC312;
            border: none;
        }

        .btn-primary:hover {
            color: black;
            background-color: white;
        }

        .btn-cancel {
            color: white;
            background-color: #FF6F61;
            border: none;
        }

        .btn-cancel:hover {
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

        .mt-2 {
            margin-top: .5rem !important;
        }

        .mt-4 {
            margin-top: 1.5rem !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Forgot Your Password?</h3>
            </div>

            <div class="mb-4 text-sm text-white">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            @if (session('status'))
                <div class="alert alert-success mb-4">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email" class="text-white">Email</label>
                    <input id="email" type="email" class="form-control" name="email" :value="old('email')"
                        required autofocus>
                    @error('email')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ url('/') }}" class="btn btn-cancel">Cancel</a>
                    <button type="submit" class="btn btn-primary">Email Password Reset Link</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
