<!doctype html>
<html lang="sk" data-layout="vertical" data-layout-style="default" data-layout-position="fixed" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover-active" data-layout-width="fluid">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <meta name="author" content="DeMi Studio, s.r.o.">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Admin | {{ env('APP_NAME') }} </title>

    <link rel="shortcut icon" href="{{ asset('img/admin-favicon.ico') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="{{ asset('js/layout.js') }}"></script>
    <link href="{{ asset('css/admin.min.css') }}" rel="stylesheet" type="text/css">
    @yield('style')

</head>

<body>

@yield('content')

</body>
</html>
