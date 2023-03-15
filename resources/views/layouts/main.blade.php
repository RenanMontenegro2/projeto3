<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!--Fonte do Google-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!--CSS da aplicação-->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
        <!--CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!--meu css-->
        <style>
            *{
            font-family:'Roboto'
            }
            body{
            min-height: 100vh;
            padding-bottom: 100px;
            /*posição relativa,ocupa o espaço todo*/
            position: relative;

            }
            header{
                background-color: #FFF;
                border-bottom:1px solid #CCC;

            }

            .row{
                margin:0;
            }
            .container-fluid{
                padding:0;
            }
            .btn-primary{
                background-color: #F2A340;
                border:2px solid #C28008;
            }
            .btn-primary:hover{
                background-color: #C28008;
                border-color:#C28008;
            }
            #navbar img{
                width:50px;
            }

            #navbar{
                justify-content: space-between;
                background-color:#FFF;
                padding:5px 0;
            }
            #navbar a{
                font-size:14px;
                color:#757575;
            }
            #navbar a:hover{
                color:#F2A340
            }
            #search-container{
                background-image: url("../imagens");
                background-size:cover;
                background-position:center;
                height:400px;
                padding:50px;
                text-align: center;
            }
            #search-container h1{
                color:rgb(58, 57, 57);
                margin-bottom:30px;
                font-weight:900
            }
            #search-container form{
                widht:50%;
                margin:0 auto;
            }
            #events-container{
                padding:50px
            }
            #event-container h2{
                margin-bottom:10px;
            }
            #events-container .subtitle{
                color:#757575;
                margin-bottom:30px;

            }
            #events-cotainer card{
                flex: 1 1 0;
                max-width:25%;
                border-radius:10px;
                padding:0;
                margin:5px;
            }
            #events-container img{
                max-height:150px;
                border-top-left-radius:10px;
                border-top-right-radius:10px
            }
            .card .card-date{
                font-size:12px;
                color:#CCC;
            }
            .card .card-title{
                color:#212121;
                font-size:20px;
                font-weight: bold;
                margin-bottom:30px;
            }
            .card-participants{
                font-size:14px;
                color:#757575
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" >
            <a class="navbar-brand" href="/" >Navbar fixo</a>
            <nav id="navbar" class="bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="/events/create">Events Creats<span class="sr-only">(atual)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/">Link</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link " href="/">Desativado</a>
                    </li>
                </ul>
                </div>
            </nav>
        </nav>
        @yield('content')
        <footer class="navbar bg-dark fixed-bottom">
            <p style="color:white">HDC Eventos &copy; 2020</p>
        </footer>
    </body>
</html>
