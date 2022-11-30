<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema Eventos</title>

        {{-- Google fonts --}}
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        {{-- CSS system --}}
        <link rel="stylesheet" href="../../../public/assets/css/styles.css">

        {{-- CSS bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        {{-- JS script --}}
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <img src="/assets/img/showicon.png" alt='eventos' style="width: 10%;"> ShowsBala
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/">Eventos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/eventos/criar">Cadastrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/">Entrar</a>
                            </li>
                        </ul>
                      </div>
                </div>
            </nav>
        </header>

        @yield('footer')
        <footer>
            <div class="card text-center">
                <div class="card-header">
                    Desenvolvido por Wata Negreiros Monteiro 2022
                </div>
                <div class="card-body">
                    <h5 class="card-title">Aprendendo Laravel + InertiaJS</h5>
                    <p class="card-text">Registro do aprendizado do laravel e inertia</p>
                </div>
            </div>
        </footer>
    </body>
</html>
