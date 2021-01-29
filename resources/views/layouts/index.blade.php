<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        @include('layouts.head')

    </head>
    <body class="antialiased">

        @include('layouts.header')

        <div class="container" style="min-height: 65vh;">
            @yield('content')

            <div class="row" >
                <div class="col text-center alert alert-info" >
                    Гит репозиторий файлов этого сайта: 
                    <a href="https://github.com/nyosru/test_laravel1" target="_blank" >https://github.com/nyosru/test_laravel1</a>
                </div>
            </div>

        </div>

        @include('layouts.footer')

    </body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>
