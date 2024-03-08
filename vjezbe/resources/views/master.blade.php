<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Online ucenje')</title>
   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

    @include('parts/meni')

    <section>
        @yield('main-content')
    </section>

    <footer class="container-full text-center bg-secondary text-white mt-4 py-2">
        2024 - IP
    </footer>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>