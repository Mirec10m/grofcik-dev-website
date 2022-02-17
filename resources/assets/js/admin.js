$(function(){
    // DELETE MODAL
    var form;

    $(document).on("click", ".delete-button", function(){
        $('.delete-name').text($(this).data('entity'));
        form = $(this).parent();

        $('.modal-delete').modal();
    });

    $(document).on("click", "#delete-confirm", function(){
        form.submit();
    });

    $('.price-input').keyup(function(){
        var text = $(this).val();
        var new_text = text.replace(',', '.');

        $(this).val(new_text);
    });


    callApiOffers();


});

function callApiOffers() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Content-Type' : 'application/json',
        }
    });

    $.ajax({
        url: 'https://www.demi.sk/api/offers',
        method: 'get',
        success: function(data){
            fillUpOffers(data)
        },
        error: function(data){}
    });
}

function fillUpOffers(data) {
    let offers = $('.offers');
    $.each(data, function (index, offer) {
        let htmlValue = "<li class=\"relative\">\n" +
            "<a href=\""  + offer.path +   "\" target=\"_blank\">\n"+
            "<i class=\"fas fa-file-pdf\"></i>\n" +
            "</a>\n" +
            "<p>" + offer.name + "</p>\n" +
            "</li>"

        offers.append(htmlValue);
    });
}
