<!doctype html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="noindex,nofollow">
    <meta name="author" content="DeMi Studio, s.r.o.">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        Admin |
        {{ env('APP_NAME') }}
    </title>

    <link rel="shortcut icon" href="{{ asset('img/admin-favicon.ico') }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&amp;subset=latin-ext" rel="stylesheet">
    <link href="{{ asset('css/admin.min.css') }}" rel="stylesheet" type="text/css">
    @yield('css')

</head>
<body>

<div id="wrapper">

    @include('admin._partials._topbar')
    @include('admin._partials._menu')

    <div class="content-page">

        @yield('content')
        @include('admin._partials._footer')

    </div>
    @include('admin._partials._delete_modal')
</div>

<!-- SCRIPTS -->
<script src="{{ asset('js/admin.min.js') }}" type="text/javascript"></script>
@yield('js')

<script>

    $(document).ready(function () {
        if($(".tinymce").length > 0){
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
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ],
                content_style: 'body {font-family: "Raleway", sans-serif; font-size: 14px;}' +
                    'p {line-height: 1.5em; margin: 0;}',
                /* enable automatic uploads of images represented by blob or data URIs*/
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
