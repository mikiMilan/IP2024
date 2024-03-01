<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Online ucenje')</title>
</head>
<body>
    <header>
        <h1>Online ucenje</h1>
    </header>

    <p>----------------------------------------------------</p>

    <nav>
        <ul>
            <li>Link </li>
        </ul>
    </nav>

    <p>----------------------------------------------------</p>

    <section>
        @yield('main-content')
    </section>

    <p>----------------------------------------------------</p>

    <footer>
        2024 - IP
    </footer>
</body>
</html>