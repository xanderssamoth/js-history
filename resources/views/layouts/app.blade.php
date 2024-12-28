<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">

        <!-- Stylesheet -->
        <link rel="stylesheet" type="text/css" href="">

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

        <!-- Scripts -->
        <script type="text/javascript" src=""></script>
    </body>
</html>