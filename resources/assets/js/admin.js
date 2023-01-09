$(function(){
    initPriceInput();
    callApiOffers();
    initSweetAlerts();
    initNoUiSlider();
    initFlatpickr();
});

function callApiOffers () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Content-Type' : 'application/json',
        }
    });

    $.ajax({
        url: 'https://www.demi.sk/api/offers',
        method: 'get',
        success: data => fillUpOffers(data),
        error: () => void 0,
    });
}

function fillUpOffers (data) {
    let buildOffer = offer => (
        '<li class="list-group-item border-0 d-flex flex-column">' +
            '<a href="' + offer.path + '" target="_blank" class="m-auto">' +
                '<i class="bx bxs-file-pdf bx-md"></i>' +
            '</a>' +
            '<p class="fw-bold">' + offer.name + '</p>' +
        '</li>'
    );

    let offers = $('.offers');

    $.each(data, (index, offer) => offers.append( buildOffer(offer) ));
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
    let buildConfirmAlert = entity => (
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
        }).then( event => event.isConfirmed ? button.parent().submit() : void 0 );
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

function initNoUiSlider () {
    let formatter = wNumb({
        decimals: 2,
        mark: ',',
        thousand: ' ',
        suffix: ' €',
    });

    $('.slider-min-max').each(function () {
        let e = $(this);

        noUiSlider.create(this, {
            start: [e.data('start-min'), e.data('start-max')],
            tooltips: [true, true],
            range: {
                'min': e.data('min'),
                'max': e.data('max'),
            },
            connect: true,
            format: formatter,
        });

        this.noUiSlider.on('update', (v, h) => $(e.data( h ? 'input-max' : 'input-min' )).val(formatter.from(v[h])) );
    })
}

function initFlatpickr () {
    $('.datepicker').flatpickr({
        'altInput': true,
        'altFormat': 'd. m. Y',
        'dateFormat': 'Y-m-d',
        'locale': 'sk',
    });
}

function initPriceInput () {
    $('.price-input').keyup(function () {
        let e = $(this);

        e.val( e.val().replaceAll(',', '.') );
    });
}

function initColorPickr () {
    $('.colorpicker').each(function () {
        Pickr.create({
            el: this,
            theme: "classic",
            default: "#405189",
            swatches: ["rgba(244, 67, 54, 1)", "rgba(233, 30, 99, 0.95)", "rgba(156, 39, 176, 0.9)", "rgba(103, 58, 183, 0.85)", "rgba(63, 81, 181, 0.8)", "rgba(33, 150, 243, 0.75)", "rgba(3, 169, 244, 0.7)", "rgba(0, 188, 212, 0.7)", "rgba(0, 150, 136, 0.75)", "rgba(76, 175, 80, 0.8)", "rgba(139, 195, 74, 0.85)", "rgba(205, 220, 57, 0.9)", "rgba(255, 235, 59, 0.95)", "rgba(255, 193, 7, 1)"],
            components: {
                preview: true,
                opacity: true,
                hue: true,
                interaction: {
                    hex: true,
                    rgba: true,
                    hsva: true,
                    input: true,
                    clear: true,
                    save: true
                }
            }
        }).on('change', color => $( $(this).data('input') ).val(color.toHEXA().toString()) );
    });
}
