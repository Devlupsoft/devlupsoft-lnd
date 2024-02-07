<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Devlupsoft L&D') }}</title>
    <!-- Favicons -->
    <link href="http://realestate.dvsft.com/front/img/favicon.png" rel="icon">
    <link href="http://realestate.dvsft.com/front/img/apple-touch-icon.png" rel="apple-touch-icon">

    @include('partials.login.inc_top')
</head>

<body>
@include('partials.login.header')
@yield('content')
@include('partials.login.footer')

</body>

</html>
