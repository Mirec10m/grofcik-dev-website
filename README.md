<p align="center">
<img src="https://www.demi.sk/email/logo.svg" width="300">
</p>

## Demi Box - Úvod

Pripravená "krabica" postavená na frameworku **Laravel 9.x**, určená na vývoj menších a stredne veľkých webov a e-shopov.
Administračné rozhranie je postavené na šablóne **Velzon 2.3.0**

## Demi Box - Sekcie

Demi Box má predpripravené sekcie v administratívnom používateľskom rozhraní. Pre odomknutie takejto sekcie stačí v **config/settings.php** súbore v poli **unlocked** zmeniť boolovské hodnoty pre konkrétnu sekcie.
- **users** (Zoznam používateľov)

## Demi Box - Funkcionalita

Demi Box ponúka určitú predpripravenú funkcionalitu:
- Základ administračného rozhrania
- AdminController, BaseModel
- Základný setup pre public storage
- Multilanguage
- Obrázky
- Autentifikácia
- Error pages
- Button Loader
- Dashboard API calls
- Vat Parser

### Demi Box - Multilanguage

Obsahuje pripravené multilanguage routes. Takisto obsahuje predpripravený LanguageMiddleware, ktorý prepína jazyk aplikácie
podľa prefixu v URL adrese.

Ako spojazdniť viacjazyčný web:
- je potrebné odkomentovať LanguageMiddleware v app/Http/Kernel.php
- je potrebné spraviť prepínanie jazykov v menu

Ako pridať jazykovú mutáciu:
- pridať kód jazyka do nastavení v config/settings.php
- vytvoriť migrácie pre všetky stĺpce vo všetkých tabuľkách s prekladom - použiť prefix mutácie (napr.: name_sk)

### Demi Box - Obrázky

Máme tu predpripravený skript na spracovanie obrázku do normálneho prevedenia a do thumb-u.

Čo potrebujete vedieť:
- skript pre upload sa nachádza v app/Traits/UploadTrait
- na použitie jeho metód stačí v controlleri použiť kód: use UploadTrait;
- nastavenia obrázkov je takisto potrebné nastaviť v config/images.php
- je predpripravený ImagesController v Admine na mazanie obrázkov stačí použiť route('images.delete', $image->id);

Pre vypísanie obrázkov v Administrácii je vytvorený _image blade komponent, pre jeho použitie treba použiť vo view:

    @include('admin._partials._image', [
        'thumb' => asset('...'), // cesta k thumb verzii obrázku
        'image' => asset('...'), // cesta k image verzii obrázku
        'delete' => route('images.delete', $image), // route na vymazanie obrázku
        'entity' => 'Obrázok X', // Názov obrázku pre konfirmačný alert
    ])

Tento komponent zobrazí taktiež button na vymazanie obrázku (s konfirmačným alertom) a button na zobrazenie obrázku.<br>
Pri zobrazení obrázku je použitá knižnica Glightbox, ktorá umožňuje prepínať sa šípkami medzi všetkými obrázkami.<br>
Pokiaľ chcete definovať, aby sa niektoré obrázky zobrazovali samostatne od ostatných, treba do komponentu poslať:

    'gallery' => 'nejaké id' // defaultné je 0

### Demi Box - Autentifikácia

Pripravená kompletná autentifikácia aj s custom views pre login, register, verify, forgot a confirm.

Ako konfigurovať autentifikáciu:
- v routes/web.php stačí keď nastavíte hodnotu true/false na routes kt. bude aplikácia používať
- overte si funkčnosť všetkých zapnutých krokov autentifiácie
- pri zapnutej registrácii je potrebné spojazdniť Google Recaptcha 3 (predpripravené - treba si pýtať ID)
- pri zapnutí verify je potrebné na routoch použiť middleware "verified"

### Demi Box - Error pages

- v **resources/views/errors/web** treba zmeniť error pages pre webovú sekciu

### Demi Box - Button Loader

Ako prevencia proti dvojitému odoslaniu requestu na server je použitý Button Loader.

Button Loader je automaticky použitý na submit buttonoch, ktoré sa nachádzajú vo formulári, alebo ho referencujú cez atribút form

    <form>
        <button type="submit">
            Button
        </button>
    </form>

    <form id="form_id"></form>
    <button type="submit" form="form_id">
        Button
    </button>

Pre použitie Button Loaderu na button, ktorý nie je submit stačí pridať class **button-loader** na button.

    <button type="button" class="button-loader">
        Button
    </button>

Pokiaľ chete využiť vlastný event na spustenie samotného efektu načítavania stačí pridať class **button-loading** na button a nastaviť ho na **disabled**.

    <button type="button" class="button-loading" disabled>
        Button
    </button>

### Demi Box - Dashboard API calls

Na stránke **Úvod** je automaticky volané API z *demi.sk*, ktoré načítavajú údaje.

Aktuálne API cally volané v Demi Boxe:

- https://www.demi.sk/api/offers (vypíše momentálne ponuky z demi.sk)
- https://www.demi.sk/api/dashboard (vypíše aktualizovaný text nástenky z demi.sk, ak nie je, tak vypíše defaultný)

### Demi Box - Vat parser

Pre formuláre, ktoré potrebujú dynamicky premeniť cenu na cenu s DPH je pripravený VAT parser

Pre použitie stačí, aby boli vytvorené nasledujúce elementy:

- input, type="checkbox" a name="vat"
- input, name="price"
- input, name="price_vat"

Príklad:

    <input name="price" type="text" class="price-input form-control">

    <input readonly name="price_vat" type="text" class="price-input form-control">
    
    <input name="vat" type="checkbox" class="form-check-input" value="1">

## Demi Box - Knižnice

Demi Box využíva nasledujúce knižnice:
- Sweet Alerts
- No UI Slider
- Flatpickr
- Colorpicker
- TinyMCE
- Select2
- Rollbar - error monitoring software

### Demi Box - Sweet Alerts

Namiesto Bootstrap alertov využíva Demi Box knižnicu **Sweet Alerts**.

    Swal.fire({
        title: "Nadpis alertu",
        html: "Správa alertu",
        icon: 'Ikona',
        showCancelButton: true,
        confirmButtonClass: "btn btn-icon button-loader w-xs me-2 mb-1",
        confirmButtonText: "Potvrdiť",
        cancelButtonClass: "btn btn-dark w-xs mb-1",
        cancelButtonText: "Zrušiť",
        buttonsStyling: false,
        showCloseButton: true
    }).then(function () {
        // -- after button click code
    });

Sweet alert obsahuje 4 predpripravené ikony pre alerty: <span color="green">*success*</span> *error* *warning* *info* <br>
Pokiaľ chcete použiť inú ikonu, tak namiesto možnosti:

    icon: 'Ikona',

je potrebné použiť možnosť:

    html: '<lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>',

a nahradiť *src* atribút.

Demi Box obsahuje 4 predpripravené typy Sweet Alertov.

#### Confirm Alert

Konfirmačný alert pre potvrdenie vykonanej akcie.

Pre použitie stačí priradiť buttonu:
- type="button"
- class="alert-confirm"
- data-action="Nejaká akcia"

Príklad:

    <button type="button" class="alert-confirm" data-action="Odoslať objednávku zákazníkovi">
        Button
    </button>

#### Delete Alert

Vymazávacý alert pre potvrdenie vymazania položky.

Pre použitie stačí priradiť buttonu:
- type="button"
- class="alert-delete"
- data-type="Typ položky"
- data-entity="Názov položky"

Príklad:

    <button type="button" class="alert-confirm" data-type="Objednávka" data-entity="2023/00001">
        Button
    </button>

#### Confirm Status Alert

Konfirmačný alert pre potvrdenie zmeny statusu objednávky.

Pre použitie stačí priradiť buttonu:
- type="button"
- class="alert-confirm-status"
- data-title="Nadpis"
- data-message="Správa"
- data-confirm-class="Farba pre konfirmačný button" (nepovinná možnosť, default = info)

Príklad:

    <button type="button" class="alert-confirm"
        data-title="Zmeniť stav pre Objednávka č. 2023/00000 - odoslaná"
        data-message="Naozaj chcete zmeniť stav pre <b>Objednávka č. 2023/00000</b> na odoslaná?"
        data-confirm-class="danger">
        Button
    </button>

#### After Confirmation Alert

Alert, ktorý sa používateľoví zobrazí po vykonanej akcii.

Pre použitie stačí v Controlleri pred presmerovaním používateľa na GET request spustiť metódu:

    $this->_setFlashMessage('Ikona', 'Názov', "Text");

Ikona môže byť vo forme *success* *error* *warning* *info*

Doplnené o mnohé rozšírenia:
- textový editor TinyMCE - stačí na textarea dať class .tinymce
- class .select2 zmení obyčajný selectbox na select s vyhľadávaním
- class .price-input mení hodnotu , (čiarka) na . (bodka)
- pre aktiváciu Rollbaru je potrebné pridať ID do .env premenných (pýtať od projektového managera)
- pre využitie knižnice DataTables stačí pridať class **datatable** na \<table> element

### Demi Box - No UI Slider

Demi Box používa NoUiSlider pre výber intervalu hodnôt.

Pre použitie treba vytvoriť \<div> element, ktorý bude obsahovať:

- class="slider-min-max"
- data-min="number" (dolná hranica slideru)
- data-max="number" (horná hranica slideru)
- data-input-min="selector" (jQuery selector pre input, do ktorého sa uloží spodná hodnota)
- data-input-max="selector" (jQuery selector pre input, do ktorého sa uloží vrchná hodnota)
- data-start-min="number" (*optional*, spodná hodnota)
- data-start-max="number" (*optional*, vrchná hodnota)

Príklad:

    <div class="slider-min-max"
        data-start-min="{{ request('input_min') }}" data-min="0" data-input-min="#input-min"
        data-start-max="{{ request('input_max') }}" data-max="1000" data-input-max="#input-max">
    </div>
    <input type="hidden" name="input_min" id="input-min" value="{{ request('input_min') }}">
    <input type="hidden" name="input_max" id="input-max" value="{{ request('input_max') }}">

### Demi Box - Flatpickr (datepicker)

Namiesto Bootstrap datepicker Demi Box využíva Flatpickr knižnicu pre výber dátumov.

Pre inicializáciu výberu jedného dátumu stačí použiť na input:

- class="datepicker"

Pre inicializáciu intervalu dátumov treba použiť na input:

- class="datepicker-range"
- data-start-date="date" (Y-m-d)
- data-end-date="date" (Y-m-d)

Príklady:

    <div class="input-group">
        <input name="input8" type="text" class="form-control datepicker">
        <span class="input-group-text">
            <i class="mdi mdi-calendar"></i>
        </span>
    </div>

    <div class="input-group">
        <input type="text" class="form-control datepicker-range"
            data-start-date="2022-01-01" data-end-date="2022-01-31">
        <span class="input-group-text">
            <i class="mdi mdi-calendar"></i>
        </span>
    </div>

### Demi Box - Colorpicker

Pre inicializáciu výberu jedného dátumu stačí vytvoriť \<div> element, ktorý bude obsahovať:

- class="colorpicker"
- data-input="selector" (jQuery selector pre input, do ktorého sa uloží hodnota)

Príklad:

    <input id="color" name="color" type="hidden" value="">
    <div class="colorpicker" data-input="#color"></div>


### Demi Box - Ostatné knižnice

- textový editor TinyMCE - stačí na textarea dať class .tinymce
- class .select2 zmení obyčajný selectbox na select s vyhľadávaním
- pre aktiváciu Rollbaru je potrebné pridať ID do .env premenných (pýtať od projektového managera)
