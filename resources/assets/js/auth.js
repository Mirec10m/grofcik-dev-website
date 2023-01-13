$(function(){
    initButtonLoading();

});

function initButtonLoading () {
    $('form').submit(function () {
        $(this).find('button[type="submit"]').addClass('button-loading');
        $(this).find('button[type="submit"]').prop('disabled', true);
    });
}
