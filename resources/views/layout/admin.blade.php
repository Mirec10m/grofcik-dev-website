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

    function initPostBlocks () {
        // Init Sortable.js dragging
        var nestedSortables = [].slice.call(document.querySelectorAll(".nested-sortable")),
            nestedSortablesHandles = (nestedSortables && Array.from(nestedSortables).forEach(function(e) {
                new Sortable(e, {
                    group: "nested",
                    handle: ".post-block-handle",
                    animation: 150,
                    fallbackOnBody: !0,
                    swapThreshold: .65,
                    onMove: function (event) {
                        if ( $(event.to).parents('.nested-sortable').length > 0 ) return false;
                    },
                })
            }));

        // Init add post block buttons
        $('.post-blocks-add').click(function () {
            let post_blocks = $('.post-blocks');
            let post_items_content = $('.post-items-content')
            let index = post_blocks.data('items') + 1;
            let type = $(this).data('type');

            post_blocks.append( buildPostBlock(index, type) );
            post_items_content.append( buildPostBlockContent(index, type) );
            post_blocks.data('items', index);

            initPostBlockListeners();
        });

        initPostBlockListeners();
    }

    function initPostBlockListeners () {
        $('.post-block .post-block-info').click(function () {
            $('.post-item-content').removeClass('active');

            $('.post-item-content[data-post-item="' + $(this).parent().data('post-item') + '"]').addClass('active');
        });
    }

    function buildPostBlock (index, type) {
        let info = {
            'image': { 'icon': 'ri-image-fill', 'name': 'Obrázok', 'description': 'Veľký obrázok' },
            'paragraph': { 'icon': 'ri-paragraph',  'name': 'Paragraf',  'description': 'Jeden paragraf s textom' },
        }[type];

        return (
            '<div class="list-group-item nested-1 post-block" data-post-item="' + index + '">' +
                '<div class="post-block-info">' +
                    '<i class="' + info.icon + ' fs-16 align-middle text-primary me-2"></i>' +
                    '<div class="post-block-name">' + info.name + '</div>' +
                    '<div class="post-block-description text-muted">' + info.description + '</div>' +
                '</div>' +
                '<div class="post-block-actions">' +
                    '<i class="ri-drag-move-fill post-block-handle"></i>' +
                    '<i class="ri-delete-bin-2-line"></i>' +
                '</div>' +
            '</div>'
        )
    }

    function buildPostBlockContent (index, type) {
        let langs = {
            'sk': 'Slovensky',
            'en': 'Anglicky',
        }

        return {
            'image': buildImagePostBlockContent,
            'paragraph': buildParagraphPostBlockContent,
        }[type](index, langs);
    }

    function buildParagraphPostBlockContent (index, langs) {
        let _lang_tabs = Object.entries(langs).reduce(function (acc, value, i) {
            return acc + (
                '<li class="nav-item">' +
                    '<a class="nav-link ' + (i === 0 ? 'active' : '') + '" data-bs-toggle="tab" href="#' + value[0] + '_' + index + '" role="tab" aria-selected="false">' +
                        value[1] +
                    '</a>' +
                '</li>'
            );
        }, '');

        let _lang_panes = Object.entries(langs).reduce(function (acc, value, i) {
            return acc + (
                '<div class="tab-pane p-3 ' + (i === 0 ? 'active' : '') + '" id="' + value[0] + '_' + index + '" role="tabpanel">' +
                    '<div class="row mb-3">' +
                        '<div class="col-sm-12">' +
                            '<div class="form-group">' +
                                '<label>' +
                                    'Obsah ' +
                                    '<span class="text-uppercase">' + value[0] + '</span>' +
                                '</label>' +
                                '<textarea name="items[' + index + '][paragraph_text_' + value[0] + ']" class="form-control tinymce"></textarea>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                '</div>'
            );
        }, '');

        return (
            '<div class="post-item-content row mb-3" data-post-item="' + index + '">' +
                '<div class="col-sm-12">' +
                    '<ul class="nav nav-tabs" role="tablist">' +
                        _lang_tabs +
                    '</ul>' +

                    '<div class="tab-content mb-4">' +
                        _lang_panes +
                    '</div>' +
                '</div>' +
            '</div>'
        );
    }

    function buildImagePostBlockContent (index, langs) {
        let _lang_tabs = Object.entries(langs).reduce(function (acc, value, i) {
            return acc + (
                '<li class="nav-item">' +
                    '<a class="nav-link ' + (i === 0 ? 'active' : '') + '" data-bs-toggle="tab" href="#' + value[0] + '_' + index + '" role="tab" aria-selected="false">' +
                        value[1] +
                    '</a>' +
                '</li>'
            );
        }, '');

        let _lang_panes = Object.entries(langs).reduce(function (acc, value, i) {
            return acc + (
                '<div class="tab-pane p-3 ' + (i === 0 ? 'active' : '') + '" id="' + value[0] + '_' + index + '" role="tabpanel">' +
                    '<div class="row mb-3">' +
                        '<div class="col-sm-6">' +
                            '<label class="form-label">' +
                                'Názov <span class="text-uppercase">' + value[0] + '</span> <span class="text-danger">*</span>' +
                            '</label>' +
                            '<input name="items[' + index + '][image_alt_' + value[0] + '" type="text" value="" class="form-control">' +
                        '</div>' +

                        '<div class="col-sm-6">' +
                            '<label class="form-label">' +
                                'Názov <span class="text-uppercase">' + value[0] + '</span> <span class="text-danger">*</span>' +
                            '</label>' +
                            '<input name="items[' + index + '][image_alt_' + value[0] + '" type="text" value="" class="form-control">' +
                        '</div>' +
                    '</div>' +

                    '<div class="row mb-3">' +
                        '<div class="col-sm-12">' +
                            '<label class="form-label">' +
                                'Krátky popis <span class="text-uppercase">' + value[0] + '</span> (max. 255 znakov) <span class="text-danger">*</span>' +
                            '</label>' +
                            '<textarea name="items[' + index + '][image_description_' + value[0] + '" class="form-control"></textarea>' +
                        '</div>' +
                    '</div>' +
                '</div>'
            );
        }, '');

        return (
            '<div class="post-item-content row mb-3" data-post-item="' + index + '">' +
                '<div class="col-sm-12">' +
                    '<ul class="nav nav-tabs" role="tablist">' +
                        _lang_tabs +
                    '</ul>' +

                    '<div class="tab-content mb-4">' +
                        _lang_panes +
                    '</div>' +

                    '<div>' +
                        '<label class="form-label">' +
                            'Profilový obrázok <span class="text-danger">*</span>' +
                        '</label>' +
                        '<input name="items[' + index + '][image_file]" class="form-control filestyle" type="file" data-text="Vybrať súbor" data-btnClass="btn-primary border-left-no-radius">' +
                    '</div>' +
                '</div>' +
            '</div>'
        );
    }

    initPostBlocks();

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
