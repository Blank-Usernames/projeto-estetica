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
        img {
            width: 100%;
            max-width: 100%;
        }
    </style>
</head>
<body>
    <main class=" bg-light py-4 px-3 d-flex flex-row" style="height: 100vh;">
        <section class="col-2 navbar navbar-expand d-flex flex-column">
            <!-- Navbrand -->
            <h1 class="container-fluid">
                <a class="navbar-brand" href="{{config('app.url')}}">
                    <img src="https://placehold.co/1920x1080?text=Logo"  alt="Logotipo">
                </a>
                <button>
                    <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
                </button>
            </h1>

            <nav>
                <a href="{{config('app.url')}}"><i class="bi bi-speedometer2"></i>Painel</a>
                <a href="#"><i class="bi bi-person-circle"></i>Usuários</a>
                <a href="#"><i class="bi bi-newspaper"></i>Novidades</a>    
            </nav>
        </section>

        <section class="col-10">Conteúdos</section> 
    </main>
</body>
</html>