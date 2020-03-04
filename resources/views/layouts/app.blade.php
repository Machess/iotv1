<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app.name', 'Test')}}</title>
</head>
<body>
@include('layouts.partial.nav-bar')
@include('layouts.partial.side-nav')
<div class="container">
    @yield('content')
</div>
</body>
</html>
