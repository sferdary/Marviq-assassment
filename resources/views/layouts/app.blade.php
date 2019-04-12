<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    @yield('stylesheets')
</head>
<body>
@include('includes.navigation')
<div class="container-fluid">
    @yield('content')
</div>
@yield('scripts')
</body>
</html>