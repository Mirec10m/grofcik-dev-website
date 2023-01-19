$(function(){
    initButtonLoading();
    initPriceInput();
    callApiOffers();
    initSweetAlerts();
    initNoUiSlider();
    initFlatpickr();
    initColorPickr();
    initVatParser();
    initSettingsProfileImageForm();
    initDatatables();
});

function initButtonLoading () {
    // On form submit all submit buttons show loader
    $('form').submit(function () {
        let buttons = $.merge(
            $(this).find('button[type="submit"]'), // Buttons inside form
            $('button[type="submit"][form="' + $(this).prop('id') + '"]') // Buttons referencing form
        );

        buttons.addClass('button-loading');
        buttons.prop('disabled', true);
    });
    // On non-submit button click show loader
    $(document).on('click', '.button-loader', function () {
        $(this).addClass('button-loading');
        $(this).prop('disabled', true);
    });
}

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
    // Confirm Alert
    $('.alert-confirm').click(function () {
        let button = $(this);

        Swal.fire({
            title: button.data('action'),
            html: 'Naozaj chcete vykonať akciu - <b>' + button.data('action') + '</b> ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonClass: "btn btn-info button-loader w-xs me-2 mb-1",
            confirmButtonText: "Potvrdiť",
            cancelButtonClass: "btn btn-dark w-xs mb-1",
            cancelButtonText: "Zrušiť",
            buttonsStyling: false,
            showCloseButton: true
        }).then( event => event.isConfirmed ? button.parent().submit() : void 0 );
    });

    // Status Confirm Alert
    $('.alert-confirm-status').click(function () {
        let button = $(this);

        Swal.fire({
            title: button.data('title'),
            html: button.data('message'),
            icon: button.data('icon') ?? 'warning',
            showCancelButton: true,
            confirmButtonClass: "btn btn-" + (button.data('confirm-class') ?? 'info') + " button-loader w-xs me-2 mb-1",
            confirmButtonText: "Potvrdiť",
            cancelButtonClass: "btn btn-dark w-xs mb-1",
            cancelButtonText: "Zrušiť",
            buttonsStyling: false,
            showCloseButton: true
        }).then( event => event.isConfirmed ? button.parent().submit() : void 0 );
    });

    // Delete Alert
    $('.alert-delete').click(function () {
        let button = $(this);

        Swal.fire({
            title: 'Vymazať záznam - ' + button.data('type'),
            html: 'Naozaj chcete vymazať záznam <b>' + button.data('entity') + '</b> ?',
            iconHtml: '<lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>',
            customClass: { icon: 'border-0' },
            showCancelButton: true,
            confirmButtonClass: "btn btn-danger button-loader w-xs me-2 mb-1",
            confirmButtonText: "Vymazať",
            cancelButtonClass: "btn btn-dark w-xs mb-1",
            cancelButtonText: "Zrušiť",
            buttonsStyling: false,
            showCloseButton: true
        }).then( event => event.isConfirmed ? button.parent().submit() : void 0 );
    });

    // After Confirmed Alert
    let confirmed_alert = $('#alert');
    if ( confirmed_alert.length > 0 ) {
        Swal.fire({
            title: confirmed_alert.data('title'),
            html: confirmed_alert.data('message'),
            icon: confirmed_alert.data('icon'),
            confirmButtonClass: "btn btn-primary button-loader w-xs mt-2",
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
    console.log('init');
    $('.colorpicker').each(function () {
        console.log($(this));
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

function initVatParser () {
    let vat_parser = () => {
        let vat_checked = $('input[type="checkbox"][name="vat"]').is(':checked');
        let price_vat = $('input[name="price"]').val() * 1.2;
        let input_price_vat = $('input[name="price_vat"]');

        input_price_vat.val( vat_checked && price_vat != 0 ? Math.round( price_vat * 100 ) / 100 : '' );
        input_price_vat.prop('disabled', ! vat_checked);
    }

    $('input[type="checkbox"][name="vat"]').change(vat_parser).trigger('change');
    $('input[name="price"]').change(vat_parser);
}

function initSettingsProfileImageForm () {
    $('#profile-img-file-input').change(
        () => $('#profile-img-file-form').submit()
    );
}

function initDatatables () {
    let language = {
        "language": {
            "emptyTable": "Pre tabuľku zatiaľ neexistujú žiadne dáta",
            "search": "Hľadať:",
            "lengthMenu": "Zobraziť _MENU_ záznamov",
            "info": "Zobrazené od _START_ do _END_ z _TOTAL_ záznamov",
            "infoEmpty": "Zobrazené od 0 do 0 z 0 záznamov",
            "paginate": {
                "first":      "Prvá",
                "last":       "Posledná",
                "next":       "Nasledujúca",
                "previous":   "Predchádzajúca"
            }
        }
    };

    $('.datatable').DataTable(language);
}
