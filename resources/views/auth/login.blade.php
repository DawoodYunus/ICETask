<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - My Blog</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            color: white;
            text-align: center;
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://wallpapercave.com/wp/wp10845208.jpg') no-repeat center center fixed;
            background-size: cover;
            z-index: -2;
        }

        body::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            z-index: 1;
            padding: 0 20px;
        }

        h1 {
            margin: 0;
            font-size: 4em;
            color: #D6AD60; /* Gold */
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.7);
            letter-spacing: 3px;
        }

        form {
            background: rgba(18, 38, 32, 0.7); /* Charcoal with opacity */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 500px;
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            color: #F4EBD0; /* Cream */
            margin-bottom: 0.5rem;
        }

        .form-group input {
            width: 90%;
            padding: 0.5rem;
            border: none;
            border-radius: 5px;
            background-color: rgba(211, 211, 211, 0.3); /* Light grey with opacity */
        }

        .form-group .error {
            color: #ff6b6b; /* Light red */
            margin-top: 0.5rem;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1rem;
        }

        .form-actions a {
            color: #B68D40; /* Tan */
            text-decoration: underline;
        }

        .form-actions button {
            background-color: #D6AD60; /* Gold */
            border: none;
            color: #122620; /* Charcoal */
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .form-actions button:hover {
            background-color: #B68D40; /* Tan */
            color: #122620; /* Charcoal */
        }

        .remember-me {
            align-items: center;
        }

        .remember-me input {
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <!-- Session Status -->
        <div class="mb-4">
            @if (session('status'))
                <span class="text-red-500">{{ session('status') }}</span>
            @endif
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                @error('email')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group mt-4">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
                @error('password')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="form-group block mt-4">
                <label for="remember_me" class="remember-me">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="form-actions flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button type="submit" class="ms-3">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </div>
</body>

</html>
