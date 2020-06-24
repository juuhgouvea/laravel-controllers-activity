<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" integrity="sha256-zmfNZmXoNWBMemUOo1XUGFfc0ihGGLYdgtJS3KCr/l0=" crossorigin="anonymous">
    <title>Sistema de Gestão de Municípios</title>
</head>
<body>
    <header>
        <div class="h-25 container jumbotron bg-dark">
            <div class="d-flex flex-align-items-center text-white">
                @yield('icon')
                <h1 class="text-center text-white w-75">SGM - Sistema de Gestão de Municípios</h1>
            </div>
        </div>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <hr class="container my-4">
    <footer class="container">
        <h4 class="ml-5 text-dark text-small">&copy;2020 &gt;&gt; Julia Gouvêa</h4>
    </footer>
</body>
</html>
