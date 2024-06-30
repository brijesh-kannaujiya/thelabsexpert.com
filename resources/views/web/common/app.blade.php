<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>The Xpert Lab</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    @include('web.common.css')
    @stack('css')

</head>

<body>

    @include('web.common.header')

    @yield('content')


    @include('web.common.footer')

    @include('web.common.js')
    @stack('js')


</body>

</html>
