<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">  
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <style>
        :root {
            --corText: #333;
            --bs-primary-rgb: 255,255,255;
            --bs-secondary-rgb: 198,147,248; /* 64,198,219 */
            --bs-light-rgb: 255,255,255;
            --bs-dark-rgb: 121,32,176;
        }

        * {
            box-sizing: border-box;
            max-width: 100%;
        }

        img {
            width: 100%;
            max-width: 100%;
        }

        .conteudos {
            background-color: rgba(var(--bs-secondary-rgb),0.4) !important; 
            width: calc( (100% / 12 * 10) - 1rem);
            box-shadow: inset 0 0 1rem rgba(255,255,255,0.4);
            border: solid 0.1rem rgba(var(--bs-secondary-rgb), 1);
        }

        .menu_lateral {
            max-width: 10rem;
        }

        @media screen and (max-width: 576px) {
            .menu_lateral img {
               display: flex;
               justify-content: start;
            }

            .btn_menu {
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 0.1rem 0.2rem;
                aspect-ratio: 1; /* Define height e width para o mesmo tamanho (quadrado) */
            }

            .abre {
                width: 25rem;
            }

            .mostra {
                display: inline-block !important;
            }

            .btn:active, .btn:hover {
                background: transparent !important;
            }
        }

         .meio {
            width: 20vw;
            aspect-ratio: 1/1;
            background: red;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <main class="bg-primary p-3 d-flex flex-row" style="height: 100vh;">
        <section class="col-1 col-md-3 gnavbar navbar-expand d-flex flex-column bg-light rounded-1 overflow-hidden menu_lateral" id="menuLateral">

            <button class="btn btn-outline-dark d-block d-md-none btn_menu" id="btnMenu">
                    <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Navbrand -->
            <h1 class="container-fluid">
                <a class="navbar-brand" href="{{config('app.url')}}">
                    <img class="col-12" src="https://placehold.co/1920x1080?text=Logo"  alt="Logotipo">
                </a>
            </h1>

            <nav class="w-100">
                <a class="nav-link w-100 p-2 mb-2" href="{{config('app.url')}}/painel"><span class="h4 ms-md-3 fw-normal"><i class="bi bi-speedometer2 pe-3"></span></i><span class="d-none d-md-inline-block">Painel</span></a>
                <a class="nav-link w-100 p-2 mb-2 " href="{{config('app.url')}}/usuarios"><span class="h4 ms-md-3 fw-normal"><i class="bi bi-person-circle pe-3"></span></i><span class="d-none d-md-inline-block">Usuários</span></a>
                <a class="nav-link w-100 p-2 mb-2" href="{{config('app.url')}}/novidades"><span class="h4 ms-md-3 fw-normal"><i class="bi bi-newspaper pe-3"></span></i><span class="d-none d-md-inline-block">Novidades</span></a>   
            </nav>
        </section>

        <section class="col-10 bg-secondary ms-3 rounded-1 conteudos">
            <!-- Área que será alterada em cada página -->
            @yield('conteudos')
        </section> 
    </main>
</body>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function(){

        // Pegar o botão do menu
        let menuBtn = document.querySelector('#btnMenu');

        // Observar o clique
        menuBtn.addEventListener('click', function(){
            document.querySelector("#menuLateral").classList.toggle('abre');

        // Aplicamos CSS aos textos
            let links = document.querySelectorAll(" nav i + span ");
            links.forEach( function( item ){

                // Laço de Repetição
                item.classList.toggle('mostra');
            } );
        });
    });
</script>
</html>