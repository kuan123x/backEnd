<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINALS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        h1 {
            text-align: center;
        }

        .navbar {
            background: linear-gradient(to right, #d7d2cc 0%, #304352 100%);
            padding: 30px;
        }

        .nav-link {
            color: #000;
        }

        .nav-link.active {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light">
        <h1>FINALS</h1>
        <ul class="nav justify-content-end nav-pills">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('/') ? 'active' : '' }}" href="{{ url('/') }}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('teams') ? 'active' : '' }}" href="{{ url('/teams') }}">TEAMS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('players') ? 'active' : '' }}" href="{{ url('/players') }}">PLAYERS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('heroes') ? 'active' : '' }}" href="{{ url('/heroes') }}">HEROES</a>
            </li>
        </ul>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>
