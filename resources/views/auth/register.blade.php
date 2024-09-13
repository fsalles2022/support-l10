<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
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

        .links {
            color: white;
        }

        .links a {
            margin-left: 4px;
        }

        .text-danger {
            color: #FF6F61;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Register</h3>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="form-group">
                    <label for="name" class="text-white">Name</label>
                    <input id="name" type="text" class="form-control" name="name" :value="old('name')"
                        required autofocus autocomplete="name">
                    @error('name')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email" class="text-white">Email</label>
                    <input id="email" type="email" class="form-control" name="email" :value="old('email')"
                        required autocomplete="username">
                    @error('email')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password" class="text-white">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required
                        autocomplete="new-password">
                    @error('password')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label for="password_confirmation" class="text-white">Confirm Password</label>
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password">
                    @error('password_confirmation')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ url('/') }}" class="btn cancel_btn">Cancel</a>
                    <button type="submit" class="btn login_btn">Register</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
