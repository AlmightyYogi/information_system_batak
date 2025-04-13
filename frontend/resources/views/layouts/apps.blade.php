<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/fileStyle.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/api.js') }}" defer></script>
    <script src="{{ asset('js/auth.js') }}" defer></script>
    <script src="{{ asset('js/header.js') }}" defer></script>
    <script src="{{ asset('js/profile.js') }}" defer></script>
</head>
<body class="@yield('body-class')">
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
</body>
</html>
