$(document).ready(function(){
    $('body').addClass('loaded');
})

$(function(){
    initNavbar();
    initNavbarActiveLinks();
    initCookies();
});

function initNavbar () {
    $('.nav-link').click(function(){
        const scrollTo = $(this).data('scroll-to');

        $([document.documentElement, document.body]).animate({
            scrollTop: $(scrollTo).offset().top - 80
        }, 500);
    });
}

function initNavbarActiveLinks () {
    $(window).scroll(function(){
        $('section').each(function(){
            if($(window).scrollTop() > ($(this).offset().top - 81)){

                const id = $(this).attr('id');
                $('.nav-link').removeClass('active');
                $('a.nav-link[href^="#' + id +'"]').addClass('active');
            }
        });
    });
}

function initCookies () {
    if ( $('#cookies-bar').length === 0 || $('#cookies-modal').length === 0 ) return;

    let analytical = $('#cookies_analytical');
    let marketing = $('#cookies_marketing');
    let btn_save = $('.cookies-button[data-cookies-action="save"]');

    $('#cookies-modal').on( 'show.bs.modal', () => $("#cookies-bar").addClass('cookies-dismissed') );

    let updateSaveButtonText = () => {
        let data_attr = analytical.is(':checked') || marketing.is(':checked') ? 'text-save' : 'text-refuse';
        btn_save.html(btn_save.data(data_attr));
    }

    $('.cookies-button[data-cookies-action="refuse-all"]').click( () => sendCookiesAjax(0, 0) );
    $('.cookies-button[data-cookies-action="accept-all"]').click( () => sendCookiesAjax(1, 1) );
    btn_save.click( () => sendCookiesAjax(analytical.is(':checked') ? 1 : 0, marketing.is(':checked') ? 1 : 0) );
    $('.cookies-switch').change( () => updateSaveButtonText() ).trigger('change');
}

function sendCookiesAjax (cookies_analytical, cookies_marketing) {
    $("#cookies-bar").addClass('cookies-dismissed');
    $('#cookies-modal').modal('hide');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'X-Requested-With': 'XMLHttpRequest',
            'Content-type': 'application/x-www-form-urlencoded; charset=UTF-8'
        }
    });

    let onSuccess = data => {
        $('#cookies_analytical').prop('checked', data.cookies_analytical == 1);
        $('#cookies_marketing').prop('checked', data.cookies_marketing == 1);
        if ( typeof gtag === 'function' ) gtag('consent', 'update', { 'analytics_storage': data.cookies_analytical ? 'granted' : 'denied' });
    }

    $.ajax({
        url: $('#cookies-bar').data('url'),
        method: 'post',
        data: { cookies_analytical, cookies_marketing },
        success: onSuccess,
        error: () => {},
    });
};
