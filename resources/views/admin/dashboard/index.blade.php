@extends('layout.admin')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Úvod', 'crumbs' => []])

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <p>Vitajte vo Vašej administrácii</p>

                            <h6 class="card-title">Úvod</h6>
                            <p>Tento administračný systém bol vytvorený v DeMi Studio, s. r. o.</p>

                            <h6 class="card-subtitle fw-bold">Starostlivosť o Váš web</h6>
                            <p>Tu si môžete pozrieť ponuku balíkov starostlivosti o Váš web. Každý z našich balíkov starostlivosti okrem iného zahrňuje aj monitorovanie Vášho webu <strong>24/7</strong> pomocou externého softvéru.</p>

                            <h6 class="card-subtitle fw-bold">Príklad z praxe</h6>
                            <p><i>Používateľ / Zákazník príde na web / eshop a pri interakcii s aplikáciou mu vyhodí chybu. Pomocou monitorovacieho softvéru je chyba automaticky odchytená a odoslaná na náš email. K tomuto emailu majú prístup naši programátori, ktorí problém automaticky odstránia aby sa už neopakoval ďalšiemu návštevníkovi Vašich webových stránok. — V prípade, že web nie je monitorovaný, vlastník webu sa o probléme nemusí dozvedieť, až kým mu ho nenahlási niektorý z návštevníkov webových stránok.</i></p>

                            <ul class="list-group list-group-horizontal offers"></ul>

                            <p>Zostaňte s nami v kontakte:</p>

                            <ul class="list-group list-group-horizontal mb-3">
                                <li class="list-group-item border-0">
                                    <a href="https://www.demi.sk/" target="_blank">
                                        <img src="{{ asset('img/admin-logo-mark.svg') }}" class="img-responsive dashboard-contact-img" alt="Demi Studio logo"/>
                                    </a>
                                </li>
                                <li class="list-group-item border-0">
                                    <a href="https://www.facebook.com/Demi-Studio-114844622479287/" target="_blank">
                                        <i class="bx bxl-facebook-square bx-md"></i>
                                    </a>
                                </li>
                                <li class="list-group-item border-0">
                                    <a href="https://www.instagram.com/demi__studio/" target="_blank">
                                        <i class="bx bxl-instagram bx-md"></i>
                                    </a>
                                </li>
                                <li class="list-group-item border-0">
                                    <a href="https://www.linkedin.com/company/demi-studio/" target="_blank">
                                        <i class="bx bxl-linkedin-square bx-md"></i>
                                    </a>
                                </li>
                            </ul>


                            <h6 class="card-title">Potrebujete pomoc?</h6>
                            <p>
                                V prípade potreby nás prosím kontaktujte e-mailom.
                                <br><br>
                                E-mail: <b>support@demi.sk</b>
                                <br>
                                Tel. č.: <b>+421 918 735 863</b>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
