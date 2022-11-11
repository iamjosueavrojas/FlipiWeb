<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">

        <style>
            .titulo{
                display: flex;
                align-items: center;
                font-size: 66px;
                margin-button: 5px;
            }
            .imgprincipal{
                margin-top: 70px;
                width: 550px;
            }
            .subtitulo{
                margin-top: 90px;
                text-align: center;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body >
        <div class="container">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <a class="navbar-brand text-warning fs-2" href="#"><b>FlipiBot</b></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-lg-0">
                            <li class="nav-item">
                                <a class="btn btn-warning text-white" href="#"><b>Donar</b></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="imgprincipal mx-auto d-block" src="{{ asset('imagenes/telefono2.png') }}" alt="">
                    </div>
                    <div class="col-lg-6 titulo">
                        <div class="">
                            <p class="text-warning"><b>Crea stickers de una manera más sencilla</b></p>
                            <p class="fs-5">Crea stickers a partir de imágenes y videos de una manera más sencilla sin tener que salir de whatsApp</p>
                            <a href="" class="btn btn-warning text-white"><b>Comenzar</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section>
            <div class="container">
                <div>
                    <p class="fs-1 subtitulo"><b>¿Cómo usar FlipiBot?</b></p>
                </div>
                <div class="row text-center">
                    <div class="col-lg-4 text-center">
                        <img class="mx-auto d-block" src="{{ asset('imagenes/uso1.png') }}" alt="">
                        <p class="fs-3 text-warning m-3"><b>Escanea el código</b></p>
                        <p>Usa tu telefono para poder acceder al bot, en caso de no poder puedes ingresar usando el <a href="" class="text-warning"><b>enlace</b></a>.</p>
                    </div>
                    <div  class="col-lg-4">
                        <img class="mx-auto d-block" src="{{ asset('imagenes/uso2.png') }}" alt="">
                        <p class="fs-2 text-warning m-3"><b>Comandos</b></p>
                        <p>Usa el comando !hola para empezar a interactuar con el bot. Es importante leer las reglas.</p>
                    </div>
                    <div class="col-lg-4">
                        <img class="mx-auto d-block" src="{{ asset('imagenes/uso3.png') }}" alt="">
                        <p class="fs-2 text-warning m-3"><b>Envia multimedia</b></p>
                        <p>Puedes enviar una imagen o video para transformarlo en un sticker.</p>
                    </div>
                </div>  
            </div>
        </section>

        
    </body>
</html>
