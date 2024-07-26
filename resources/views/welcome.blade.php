<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        .background {
            background: #f8f9fa;
        }
        .container-custom {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .header-links a {
            margin-left: 15px;
        }
    </style>
</head>
<body class="background">
    <div class="container-custom">
        <div class="container text-center">
            <div class="header-links">
                @if (Route::has('login'))
                    <div class="mb-4">
                        @auth
                            <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-primary">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-outline-secondary">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>

            <h1>Welcome to Budget Tracker</h1>
           
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
