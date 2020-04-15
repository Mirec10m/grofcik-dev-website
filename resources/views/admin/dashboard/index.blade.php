@extends('layout.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title color-primary">Demi Box v 3.0</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                Vitajte vo Vašej administrácii
                            </li>
                        </ol>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Úvod</h4>
                        <div>
                            Tento administračný systém bol vytvorený v DeMi Studio, s. r. o.
                            <br>
                            <br>
                            Zostaňte s nami v kontakte:
                            <ul class="admin-list">
                                <li class="relative">
                                    <a href="https://www.demi.sk/" target="_blank" class="admin-list-logo">
                                        <img src="{{ asset('img/znak.svg') }}" class="img-responsive" alt="Demi Studio logo" />
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/Demi-Studio-114844622479287/" target="_blank">
                                        <i class="fab fa-facebook fa-2x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/demi__studio/" target="_blank">
                                        <i class="fab fa-instagram fa-2x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/demi-studio/" target="_blank">
                                        <i class="fab fa-linkedin fa-2x"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Potrebujete pomoc?</h4>
                        <div>
                            V prípade potreby nás prosím kontaktujte e-mailom.
                            <br><br>
                            E-mail: <b>support@demi.sk</b>
                            <br>
                            Tel. č.: <b>+421 918 735 863</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
