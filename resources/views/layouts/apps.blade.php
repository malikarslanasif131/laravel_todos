<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap 5 JS (including Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="min-vh-100 d-flex flex-column bg-light">
        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Authentication Links -->
        <div class="bg-white shadow-sm py-3">
            <div class="container d-flex justify-content-end">
                @auth
                    <form method="POST" action="{{ route('logout') }}" class="me-3">
                        @csrf
                        <button type="submit" class="btn btn-outline-secondary">{{ __('Logout') }}</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline-secondary">{{ __('Register') }}</a>
                    @endif
                @endauth
            </div>
        </div>

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow-sm">
                <div class="container py-4">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main class="flex-grow-1">
            <div class="container py-4">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>
</html>
