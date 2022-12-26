$(function(){

    $('.price-input').keyup(function(){
        var text = $(this).val();
        var new_text = text.replace(',', '.');

        $(this).val(new_text);
    });


    callApiOffers();
    initSweetAlerts();


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
        let htmlValue = '<li class="list-group-item border-0 d-flex flex-column">' +
            '<a href="' + offer.path + '" target="_blank" class="m-auto">' +
            '<i class="bx bxs-file-pdf bx-md"></i>' +
            '</a>' +
            '<p class="fw-bold">' + offer.name + '</p>' +
            '</li>';

        offers.append(htmlValue);
    });
}

function initSweetAlerts () {
    let buildDeleteAlert = entity => (
        '<div class="mt-3">' +
            '<lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>' +
            '<div class="mt-4 pt-2 fs-15 mx-5">' +
                '<h4>Ste si istý ?</h4>' +
                '<p class="text-muted mx-4 mb-0">Ste si istý, že chcete vymazať položku - ' + entity + ' ?</p>' +
            '</div>' +
        '</div>'
    );

    $('.alert-delete').click(function () {
        let button = $(this);

        Swal.fire({
            title: 'Vymazať položku - ' + button.data('entity'),
            html: buildDeleteAlert( button.data('entity') ),
            showCancelButton: true,
            confirmButtonClass: "btn btn-danger w-xs me-2 mb-1",
            confirmButtonText: "Áno",
            cancelButtonClass: "btn btn-dark w-xs mb-1",
            cancelButtonText: "Nie",
            buttonsStyling: false,
            showCloseButton: true
        })
            .then( event => event.isConfirmed ? button.parent().submit() : void 0 );
    });

    let confirmed_alert = $('#alert');
    if ( confirmed_alert.length > 0 ) {
        Swal.fire({
            title: confirmed_alert.data('title'),
            html: confirmed_alert.data('message'),
            icon: confirmed_alert.data('icon'),
            confirmButtonClass: "btn btn-primary w-xs mt-2",
            buttonsStyling: false
        });
    }
}
