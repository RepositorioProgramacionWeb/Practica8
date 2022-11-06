<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Plantilla8</title>
        <style>
            .contenedor{
                background-color:#8E93F4;
                text-align:center;
            }

            .infoGeneral{
                background-color:#8E93F4;
                margin:10px 0;
                width: 50%;
                color:#8EF490;
            }

            .pie{
                background-color:#F7AB63;
            }

            .noticia{
                background-color:#8E93F4;
                text-align:center;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
    </head>
    <body class="antialiased">
        <div class="contenedor">
            @yield("cabecera")
            <!--BARRA DE NAVEGACIÓN-->
            <nav class="navbar navbar-light bg-dark">
            <form class="container-fluid justify-content-start">
            <button class="btn btn-outline-success me-2" type="button" onclick="location='prin'">Principal</button>
            <button class="btn btn-outline-success me-2" type="button" onclick="location='reg'">Registrar Libro</button>
            </form>
            </nav>
        </div>
        
        <div class="infoGeneral">
            @yield("infoGeneral")
            
        </div>

        <div class="noticia">
            @yield("noticia")
            
        </div>

        <div class="pie">
            @yield("pie")
            <footer>
            Biblioteca Tecnológica UPQ CopyRight® 03-Noviembre-2022
            <!--<p>Author: Hege Refsnes</p>
            <p><a href="mailto:hege@example.com">hege@example.com</a></p>-->
            </footer>
        </div>
    </body>
</html>
