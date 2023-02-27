@extends('layout.admin')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Úvod', 'crumbs' => []])

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="dashboard-demi-text"></div>

                            <ul class="list-group list-group-horizontal offers"></ul>

                            <p>Zostaňte s nami v kontakte:</p>

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <a href="https://www.linkedin.com/company/demi-studio/" class="dashboard-linkedin mb-40" target="_blank">
                                        <img src="https://www.demi.sk/images/icons/linkedin.svg" alt="Logo LinkedIn">
                                        <div>
                                            Sledujte nás na LinkedIn.
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <a href="https://www.demi.sk/" target="_blank">
                                        <img src="{{ asset('img/admin-logo.svg') }}" class="img-responsive" alt="Demi Studio logo" width="100"/>
                                    </a>
                                </div>
                            </div>

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
