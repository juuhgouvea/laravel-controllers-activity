<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" integrity="sha256-zmfNZmXoNWBMemUOo1XUGFfc0ihGGLYdgtJS3KCr/l0=" crossorigin="anonymous">
    <title>Sistema de Gestão de Municípios</title>
</head>
<body>
    <header>
        <nav class="container navbar bg-dark mb-5 p-3">
            <div class="d-flex flex-align-items-center text-white w-100">
                <h3>
                    <i class="{{ $iconClass }}"></i>
                    {{ $titulo }}
                </h3>
                <h3 class="text-center text-white w-75">SGM - Sistema de Gestão de Municípios</h3>
            </div>
        </nav>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <hr class="container my-4">
    <footer class="container">
        <h5 class="ml-5 text-dark text-small">&copy;2020 <i class="fas fa-angle-double-right"></i> Julia Gouvêa</h5>
    </footer>

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
