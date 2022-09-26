<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
    <style>
            html, body {
                font-weight: 200;
                height: 100vh;
                margin-top: 50px;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 90px;
            }
            .m-b-md {
                margin-bottom: 50px;
            }
        </style>

        <div class="content">
            <div class="title m-b-md">
                {{$title}}
            </div>

            <a class="links" href="{{route('PageUser')}}">Pagina Utente</a>
        </div>
    </body>
</html>
