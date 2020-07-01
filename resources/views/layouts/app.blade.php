<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta name="viewport" content="width=device, initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <title>@yield('page-title')</title>
    </head>
    <body>
        @include('partials/_header')
        <main>
            @yield('content')
        </main>
        @include('partials/_footer')
    </body>
    <script src=" {{ asset('js/app.js')}}" charset="utf-8"></script>
</html>
