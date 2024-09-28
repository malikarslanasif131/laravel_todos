<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                background: linear-gradient(to right, #ffca82 0%, #fb7e7e 100%);
                margin: 0;
                padding: 0;
            }
            .hero {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                text-align: center;
            }
            .hero h1 {
                font-size: 3rem;
                font-weight: 700;
                color: #ffffff;
                margin-bottom: 20px;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            }
            .hero p {
                font-size: 1.2rem;
                color: #333;
                max-width: 600px;
                margin-bottom: 30px; 
                word-spacing: 1px;
            }
            .hero .buttons {
                display: flex;
                gap: 1rem;
                justify-content: center;
                margin-bottom: 50px;
            }
            .hero .buttons a {
                padding: 12px 30px;
                background-color: #FF2D20;
                color: white;
                border-radius: 8px;
                text-decoration: none;
                font-size: 1rem;
                transition: background-color 0.3s;
            }
            .hero .buttons a:hover {
                background-color: #e6251b;
            }
            .features {
                display: flex;
                justify-content: space-around;
                padding: 40px 20px;
                background-color: white;
                box-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
            }
            .features .feature {
                text-align: center;
                max-width: 250px;
            }
            .features .feature img {
                width: 80px;
                margin-bottom: 15px;
            }
            .features .feature h3 {
                font-size: 1.5rem;
                color: #FF2D20;
                margin-bottom: 10px;
            }
            .features .feature p {
                color: #666;
            }
            footer {
                text-align: center;
                padding: 20px;
                background-color: #f7f7f7;
                color: #333;
                font-size: 0.9rem;
            }
        </style>
    </head>
    <body>
        <!-- Hero Section -->
        <section class="hero">
            <h1>Welcome to Todos-Log</h1>
            <p>This project is a dynamic To-Do list application built with Laravel, where users can register, log in, and manage their personal tasks efficiently. It allows users to create, edit, and delete tasks while tracking the start and completion times. The application also provides an intuitive interface with authentication to ensure that each user manages their own tasks securely and effectively.</p>

            <div class="buttons">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}">Go to Dashboard</a>
                        <a href="{{ route('todos.index') }}" >View To-Do List </a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </section>
    </body>
</html>
