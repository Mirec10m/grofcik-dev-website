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

@include('admin._partials._alert')

<div id="layout-wrapper">
    @include('admin._partials._topbar')
    @include('admin._partials._menu')

    <div class="vertical-overlay"></div>

    <div class="main-content">
        @yield('content')

        @include('admin._partials._footer')
    </div>
</div>

<script src="{{ asset('js/admin.min.js') }}" type="text/javascript"></script>
@yield('js')

<script>

    /*let buildConfirmAlert = entity => (
        '<div class="mt-3">' +
        '<lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>' +
        '<div class="mt-4 pt-2 fs-15 mx-5">' +
        '<h4>Ste si istý ?</h4>' +
        '<p class="text-muted mx-4 mb-0">Ste si istý, že chcete vymazať položku - ' + entity + ' ?</p>' +
        '</div>' +
        '</div>'
    );*/

    $('.alert-confirm').click(function () {
        let button = $(this);

        Swal.fire({
            title: button.data('action'),
            //html: buildConfirmAlert( button.data('entity') ),
            html: 'Ste si istý, že chcete vykonať akciu - <b>' + button.data('action') + '</b> ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonClass: "btn btn-danger w-xs me-2 mb-1",
            confirmButtonText: "Áno",
            cancelButtonClass: "btn btn-dark w-xs mb-1",
            cancelButtonText: "Nie",
            buttonsStyling: false,
            showCloseButton: true
        }).then( event => event.isConfirmed && false ? button.parent().submit() : void 0 );
    });

    $(document).ready(function () {
        if( $(".tinymce").length > 0 ){
            tinymce.init({
                selector: "textarea.tinymce",
                language_url: "{{ asset("js/tinymce/sk.js") }}",
                theme: "modern",
                height: 300,
                menubar: 'insert',
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "image code | media | insertfile | undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | print preview fullpage | forecolor backcolor emoticons",
                style_formats: [
                    {title: 'Nadpis', inline: 'span', styles: { fontWeight: 'bold', fontSize: '35px' } },
                    {title: 'Podnadpis', inline: 'b', styles: { fontWeight: 'bold', fontSize: '25px' } },
                    {title: 'Tučné písmo', inline: 'b'},
                    {title: 'Kurzíva', inline: 'i'},
                    {title: 'Odstavec', inline: 'span', styles: { paddingLeft: '30px'} },
                    {title: 'Podčiarknute písmo', inline: 'span', styles: { 'text-decoration': 'underline' }},
                ],
                content_style: 'body {font-family: "Raleway", sans-serif; font-size: 14px;}' +
                    'p {line-height: 1.5em; margin: 0;}',
                image_title: true,
                images_upload_url: "{{ route('tinymce.upload') }}",
                automatic_uploads: true,
                paste_data_images: true,
            });

        }

    });
</script>

</body>
</html>
