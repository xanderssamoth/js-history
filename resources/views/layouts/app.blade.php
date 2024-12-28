<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">

        <!-- Font -->
        <link rel="stylesheet" href="{{ asset('assets/fonts/bootstrap-icons/bootstrap-icons.css') }}">

        <!-- Stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/mdb/css/mdb.dark.min.css') }}">
@if (!empty($entity))
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/' . $entity . '.css') }}">
@endif

        <title>
@if (!empty($page_title))
            {{ config('app.name') . ' / ' . $page_title }}
@else
            {{ config('app.name') }}
@endif
        </title>
    </head>

    <body>
@yield('app-content')        

        <div class="container-lg container-fluid">
            <div class="row">
                <div class="col-12">
                    <hr>

                    <p class="mb-4 text-center">
                        <i class="bi bi-c-circle"></i> {{ date('Y') }} 
                        <a href="https://team.xsamtech.com/xanderssamoth" target="_blank">
                            Xanders Samoth
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('assets/addons/jquery/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/addons/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/addons/mdb/js/mdb.min.js') }}"></script>
@if (!empty($entity))
        <script type="text/javascript" src="{{ asset('assets/js/' . $entity . '.js') }}"></script>
@endif
    </body>
</html>