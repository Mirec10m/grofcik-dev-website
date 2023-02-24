<!doctype html>
<html lang="sk" data-layout="vertical" data-layout-style="default" data-layout-position="fixed" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-layout-width="fluid" data-menu-pinned="{{ session('menu_pinned', auth()->user()->menu_pinned ) ? 'true' : 'false' }}">
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">

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
    </div>
</div>

<script src="{{ asset('js/admin.min.js') }}" type="text/javascript"></script>
@yield('js')

<script>

    function initPostDraftForm () {
        let form = $('form#post-draft-form');

        if ( form.length === 0 ) return;

        // REWRITE TO 30 000
        saveDraft(form);
    }

    function saveDraft (form) {
        console.log('SAVING DRAFT');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'Content-Type' : 'application/json',
            }
        });

        $.ajax({
            url: form.data('draft-url'),
            method: 'post',
            data: new FormData(form[0]),
            processData: false,
            success: data => {
                console.log(data);

                form.find('input[name="draft_id"]').val(data.draft_id);

                setTimeout(() => saveDraft(form), 5000);
            },
            error: () => {},
        });
    }

    initPostDraftForm();

    function initTinymce () {
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
    }

    $(document).ready(function () {
        initTinymce();
    });
</script>

</body>
</html>
