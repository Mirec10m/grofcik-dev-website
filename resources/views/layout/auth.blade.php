<!doctype html>
<html lang="sk" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <meta name="author" content="DeMi Studio, s.r.o.">

    <title> Admin | @yield('title') </title>

    <link rel="shortcut icon" href="{{ asset('img/admin-favicon.ico') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/auth.min.css') }}" rel="stylesheet" type="text/css">
    @yield('css')

</head>

<body>

<div class="auth-page-wrapper">
    <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
        <div class="bg-overlay"></div>

        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
            </svg>
        </div>
    </div>

    <div class="auth-page-content">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0 text-muted">
                            © {{ \Carbon\Carbon::now()->year }} DeMi-Box. Vytvorila spoločnosť
                            <a href="https://www.demi.sk/" target="_blank">
                                <b>DeMi Studio</b>.
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<style>
    .button-loading {
        color: transparent;
    }
    .button-loading::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 25px;
        height: 25px;
        transform: translate(-50%, -50%);
        border: 4px dashed;
        border-radius: 50%;
        border-color: #fff;
    }
</style>

<script src="{{ asset('js/auth.min.js') }}" type="text/javascript"></script>
<script>
    $('form').submit(function () {
        $(this).find('button[type="submit"]').addClass('button-loading');
    });
</script>
@yield('js')

</body>
</html>
