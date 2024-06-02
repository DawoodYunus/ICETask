<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
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
    </style>
</head>

<body>
    <div class="container">
        <h1>My Blog</h1>
        <div class="intro-text">
            <p>Welcome to our Blog App where you can share your thoughts and ideas with the world. By joining our community, you will have the opportunity to:</p>
            <ul>
                <li>Publish your own blog posts</li>
                <li>Interact with other users</li>
                <li>Explore a wide range of topics</li>
                <li>Manage your personal profile</li>
            </ul>
            <p>Sign in or register now to start your blogging journey!</p>
        </div>
        <div class="buttons">
            <button onclick="window.location.href='<?php echo route('login'); ?>'">Login</button>
            <button onclick="window.location.href='<?php echo route('register'); ?>'">Register</button>
        </div>
    </div>
</body>

</html>
