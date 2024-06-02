<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - My Blog</title>
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

        .intro-text {
            margin: 20px 0;
            font-size: 1.2em;
            width: 100%;
            max-width: 800px;
            color: #F4EBD0; /* Cream */
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
            line-height: 1.6;
        }

        .intro-text ul {
            padding: 0;
        }

        .intro-text li {
            list-style-type: none;
            margin: 10px 0;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .buttons button {
            background-color: #122620; /* Charcoal */
            border: none;
            color: #F4EBD0; /* Cream */
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            font-family: 'Arial', sans-serif;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        .buttons button:hover {
            background-color: #B68D40; /* Tan */
            color: #122620; /* Charcoal */
            transform: translateY(-3px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.4);
        }

        .buttons button:active {
            background-color: #D6AD60; /* Gold */
            color: #122620; /* Charcoal */
            transform: translateY(0);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        form {
            background: rgba(18, 38, 32, 0.7); /* Charcoal with opacity */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 500px;
        }

        .form-group {
            margin-bottom: 1rem;
            padding: 10px;
            border-radius: 5px;
        }

        .form-group label {
            display: block;
            color: #F4EBD0; /* Cream */
            margin-bottom: 0.5rem;
        }

        .form-group input {
            background-color: rgba(211, 211, 211, 0.3);
            width: 90%;
            padding: 0.5rem;
            border: none;
            border-radius: 5px;
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
    </style>
</head>

<body>
    <div class="container">
        <h1>Register</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group">
                <label for="name">{{ __('Name') }}</label>
                <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                @error('name')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username">
                @error('email')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="new-password">
                @error('password')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                @error('password_confirmation')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-actions">
                <a href="{{ route('login') }}">{{ __('Already registered?') }}</a>
                <button type="submit">{{ __('Register') }}</button>
            </div>
        </form>
    </div>
</body>

</html>
