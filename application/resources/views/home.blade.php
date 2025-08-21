<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">  
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <style>
        * {
            box-sizing: border-box;
            max-width: 100%;
        }

        img {
            width: 100%;
            max-width: 100%;
        }

        .conteudos {
            width: calc( (100% / 12 * 10) - 1rem);
        }
    </style>
</head>
<body>
    <main class="bg-primary p-3 d-flex flex-row" style="height: 100vh;">
        <section class="col-2 navbar navbar-expand d-flex flex-column bg-light rounded-1">

            <!-- Navbrand -->
            <h1 class="container-fluid">
                <a class="navbar-brand" href="{{config('app.url')}}">
                    <img src="https://placehold.co/1920x1080?text=Logo"  alt="Logotipo">
                </a>
                <button class="btn btn-outline-light">
                    <span class="navbar-toggler-icon"></i></span>
                </button>
            </h1>

            <nav class="w-100">
                <a class="nav-link w-100 p-2 mb-2" href="{{config('app.url')}}"><span class="h4 ms-3 fw-normal"><i class="bi bi-speedometer2 pe-3"></span></i>Painel</a>
                <a class="nav-link w-100 p-2 mb-2" href="{{config('app.url')}}"><span class="h4 ms-3 fw-normal"><i class="bi bi-person-circle pe-3"></span></i>Usuários</a>
                <a class="nav-link w-100 p-2 mb-2" href="{{config('app.url')}}"><span class="h4 ms-3 fw-normal"><i class="bi bi-newspaper pe-3"></span></i>Novidades</a>   
            </nav>
        </section>

        <section class="col-10 bg-secondary ms-3 rounded-1 conteudos">Conteúdos</section> 
    </main>
</body>
</html>