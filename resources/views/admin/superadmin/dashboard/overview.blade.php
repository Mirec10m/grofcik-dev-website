@extends('layout.admin')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Prehľad', 'crumbs' => [
                'Úvod' => route('dashboard.index'),
            ]])

            <div class="row">
                <div class="col">

                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">
                                        <h4 class="fs-16 mb-1">MOJE PREHĽADY</h4>
                                        <p class="text-muted mb-0">Podrobné prehľady a grafy</p>
                                    </div>
                                    <div class="mt-3 mt-lg-0">
                                        <form action="javascript:void(0);">
                                            <div class="row g-3 mb-0 align-items-center">
                                                <div class="col-sm-auto">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control border-0 dash-filter-picker shadow" data-provider="flatpickr" data-range-date="true" data-date-format="d M, Y" data-deafult-date="01 Jan 2022 to 31 Jan 2022">
                                                        <div class="input-group-text bg-primary border-primary text-white">
                                                            <i class="ri-calendar-2-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <button type="button" class="btn btn-soft-success shadow-none"><i class="ri-add-circle-line align-middle me-1"></i> Pridať produkt</button>
                                                </div>
                                                <div class="col-auto">
                                                    <button type="button" class="btn btn-soft-info btn-icon waves-effect waves-light layout-rightside-btn shadow-none"><i class="ri-pulse-line"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Celkový zisk</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <h5 class="text-success fs-14 mb-0">
                                                    <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16,24 %
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="number-counter" data-goal="559250" data-decimals="2"></span> €</h4>
                                                <a href="" class="text-decoration-underline">Zobraziť čisté zárobky</a>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success rounded fs-3">
                                                    <i class="bx bx-euro"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Objednávky</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <h5 class="text-danger fs-14 mb-0">
                                                    <i class="ri-arrow-right-down-line fs-13 align-middle"></i> -3,57 %
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="number-counter" data-goal="36894"></span></h4>
                                                <a href="" class="text-decoration-underline">Zobraziť všetky objednávky</a>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-info rounded fs-3">
                                                    <i class="bx bx-shopping-bag"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Zákazníci</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <h5 class="text-success fs-14 mb-0">
                                                    <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +29.08 %
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="number-counter" data-goal="183350000"></span></h4>
                                                <a href="" class="text-decoration-underline">Zobraziť detaily</a>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-warning rounded fs-3">
                                                    <i class="bx bx-user-circle"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Môj zostatok</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <h5 class="text-muted fs-14 mb-0">
                                                    +0.00 %
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="number-counter" data-goal="165890" data-decimals="2"></span> €</h4>
                                                <a href="" class="text-decoration-underline">Vytiahnuť peniaze</a>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-danger rounded fs-3">
                                                    <i class="bx bx-wallet"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-header border-0 align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Príjem</h4>
                                        <div>
                                            <button type="button" class="btn btn-soft-secondary btn-sm shadow-none">
                                                Všetko
                                            </button>
                                            <button type="button" class="btn btn-soft-secondary btn-sm shadow-none">
                                                1m
                                            </button>
                                            <button type="button" class="btn btn-soft-secondary btn-sm shadow-none">
                                                6m
                                            </button>
                                            <button type="button" class="btn btn-soft-primary btn-sm shadow-none">
                                                1r
                                            </button>
                                        </div>
                                    </div>

                                    <div class="card-header p-0 border-0 bg-soft-light">
                                        <div class="row g-0 text-center">
                                            <div class="col-6 col-sm-3">
                                                <div class="p-3 border border-dashed border-start-0">
                                                    <h5 class="mb-1"><span class="number-counter" data-goal="7585"></span></h5>
                                                    <p class="text-muted mb-0">Objednávky</p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-3">
                                                <div class="p-3 border border-dashed border-start-0">
                                                    <h5 class="mb-1"><span class="number-counter" data-goal="22890" data-decimals="2"></span> €</h5>
                                                    <p class="text-muted mb-0">Zárobky</p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-3">
                                                <div class="p-3 border border-dashed border-start-0">
                                                    <h5 class="mb-1"><span class="number-counter" data-goal="367"></span></h5>
                                                    <p class="text-muted mb-0">Reklamácie</p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-3">
                                                <div class="p-3 border border-dashed border-start-0 border-end-0">
                                                    <h5 class="mb-1 text-success"><span class="number-counter" data-goal="18.92" data-decimals="2"></span>%</h5>
                                                    <p class="text-muted mb-0">Konverzný pomer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body p-0 pb-2">
                                        <div class="w-100">
                                            <div id="customer_impression_charts" data-colors='["--vz-success", "--vz-primary", "--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Predaj podľa krajiny</h4>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-soft-primary btn-sm shadow-none">
                                                Exportovať report
                                            </button>
                                        </div>
                                    </div>

                                    <div class="card-body">

                                        <div id="sales-by-locations" data-colors='["--vz-light", "--vz-success", "--vz-primary"]' style="height: 269px" dir="ltr"></div>

                                        <div class="px-2 py-2 mt-1">
                                            <p class="mb-1">Kanada <span class="float-end">75%</span></p>
                                            <div class="progress bg-soft-primary mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                                </div>
                                            </div>

                                            <p class="mt-3 mb-1">Grónsko <span class="float-end">47%</span>
                                            </p>
                                            <div class="progress bg-soft-primary mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 47%" aria-valuenow="47" aria-valuemin="0" aria-valuemax="47">
                                                </div>
                                            </div>

                                            <p class="mt-3 mb-1">Rusko <span class="float-end">82%</span></p>
                                            <div class="progress bg-soft-primary mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="82">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Najpredávanejšie produkty</h4>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown card-header-dropdown">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fw-semibold text-uppercase fs-12">Zoradiť podľa:
                                                    </span><span class="text-muted">Dnes<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Dnes</a>
                                                    <a class="dropdown-item" href="#">Včera</a>
                                                    <a class="dropdown-item" href="#">Posledných 7 dní</a>
                                                    <a class="dropdown-item" href="#">Posledných 7 dní</a>
                                                    <a class="dropdown-item" href="#">Tento mesiac</a>
                                                    <a class="dropdown-item" href="#">Posledný mesiac</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="table-responsive table-card">
                                            <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="img-fluid d-block" />
                                                            </div>
                                                            <div>
                                                                <h5 class="fs-14 my-1"><a href="#" class="text-reset">Značkové tričká</a></h5>
                                                                <span class="text-muted">24.04.2021</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1 fw-normal">29,00€</h5>
                                                        <span class="text-muted">Cena</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1 fw-normal">62</h5>
                                                        <span class="text-muted">Objednávky</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1 fw-normal">510</h5>
                                                        <span class="text-muted">Sklad</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1 fw-normal">1 798,00€</h5>
                                                        <span class="text-muted">Spolu</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="img-fluid d-block" />
                                                            </div>
                                                            <div>
                                                                <h5 class="fs-14 my-1"><a href="#" class="text-reset">Stolička z ohýbaného dreva</a></h5>
                                                                <span class="text-muted">19.03.2021</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1 fw-normal">85,00€</h5>
                                                        <span class="text-muted">Cena</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1 fw-normal">35</h5>
                                                        <span class="text-muted">Objednávky</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1 fw-normal"><span class="badge badge-soft-danger">Vypredané</span> </h5>
                                                        <span class="text-muted">Sklad</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1 fw-normal">2 982,00€</h5>
                                                        <span class="text-muted">Spolu</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="img-fluid d-block" />
                                                            </div>
                                                            <div>
                                                                <h5 class="fs-14 my-1"><a href="#" class="text-reset">Papierový pohár Borosil</a></h5>
                                                                <span class="text-muted">01 Mar 2021</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1 fw-normal">14.00€</h5>
                                                        <span class="text-muted">Cena</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1 fw-normal">80</h5>
                                                        <span class="text-muted">Objednávky</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1 fw-normal">749</h5>
                                                        <span class="text-muted">Sklad</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1 fw-normal">1 120,00€</h5>
                                                        <span class="text-muted">Spolu</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="img-fluid d-block" />
                                                            </div>
                                                            <div>
                                                                <h5 class="fs-14 my-1"><a href="#" class="text-reset">Jednomiestna pohovka</a></h5>
                                                                <span class="text-muted">11 Feb 2021</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1 fw-normal">127,50€</h5>
                                                        <span class="text-muted">Cena</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1 fw-normal">56</h5>
                                                        <span class="text-muted">Objednávky</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1 fw-normal"><span class="badge badge-soft-danger">Vypredané</span></h5>
                                                        <span class="text-muted">Sklad</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1 fw-normal">7 140,00€</h5>
                                                        <span class="text-muted">Spolu</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="img-fluid d-block" />
                                                            </div>
                                                            <div>
                                                                <h5 class="fs-14 my-1"><a href="#" class="text-reset">Prilba Stillbird</a></h5>
                                                                <span class="text-muted">17 Jan 2021</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1 fw-normal">54,00€</h5>
                                                        <span class="text-muted">Cena</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1 fw-normal">74</h5>
                                                        <span class="text-muted">Objednávky</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1 fw-normal">805</h5>
                                                        <span class="text-muted">Sklad</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1 fw-normal">3 996,00€</h5>
                                                        <span class="text-muted">Spolu</span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="align-items-center mt-4 pt-2 justify-content-between d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="text-muted">
                                                    Zobrazených <span class="fw-semibold">5</span> z <span class="fw-semibold">25</span> záznamov
                                                </div>
                                            </div>
                                            <ul class="pagination pagination-separated pagination-sm mb-0">
                                                <li class="page-item disabled">
                                                    <a href="#" class="page-link">←</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">1</a>
                                                </li>
                                                <li class="page-item active">
                                                    <a href="#" class="page-link">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">→</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Najlepší predavači</h4>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown card-header-dropdown">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Stiahnuť report</a>
                                                    <a class="dropdown-item" href="#">Export</a>
                                                    <a class="dropdown-item" href="#">Import</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="table-responsive table-card">
                                            <table class="table table-centered table-hover align-middle table-nowrap mb-0">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="avatar-sm p-2" />
                                                            </div>
                                                            <div>
                                                                <h5 class="fs-14 my-1 fw-medium">
                                                                    <a href="#" class="text-reset">iTest Factory</a>
                                                                </h5>
                                                                <span class="text-muted">Oliver Tyler</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted">Tašky a Peňaženky</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">8 547</p>
                                                        <span class="text-muted">Sklad</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted">541 200,00€</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 mb-0">32%<i class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i></h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="avatar-sm p-2" />
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h5 class="fs-14 my-1 fw-medium"><a href="#" class="text-reset">Digitech Galaxy</a></h5>
                                                                <span class="text-muted">John Roberts</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted">Hodinky</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">895</p>
                                                        <span class="text-muted">Sklad</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted">75 030,00€</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 mb-0">79%<i class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i></h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="avatar-sm p-2" />
                                                            </div>
                                                            <div class="flex-gow-1">
                                                                <h5 class="fs-14 my-1 fw-medium"><a href="#" class="text-reset">Nesta Technologies</a></h5>
                                                                <span class="text-muted">Harley Fuller</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted">Doplnky k bicyklom</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">3 470</p>
                                                        <span class="text-muted">Sklad</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted">45 600,00€</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 mb-0">90%<i class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i></h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="avatar-sm p-2" />
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h5 class="fs-14 my-1 fw-medium"><a href="#" class="text-reset">Zoetic Fashion</a></h5>
                                                                <span class="text-muted">James Bowen</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted">Oblečenie</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">5 488</p>
                                                        <span class="text-muted">Sklad</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted">29 456,00€</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 mb-0">40%<i class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i></h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="avatar-sm p-2" />
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h5 class="fs-14 my-1 fw-medium">
                                                                    <a href="#" class="text-reset">Meta4Systems</a>
                                                                </h5>
                                                                <span class="text-muted">Zoe Dennis</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted">Nábytok</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">4 100</p>
                                                        <span class="text-muted">Sklad</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted">11 260,00€</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 mb-0">57%<i class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i></h5>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="align-items-center mt-4 pt-2 justify-content-between d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="text-muted">
                                                    Zobrazených <span class="fw-semibold">5</span> z <span class="fw-semibold">25</span> záznamov
                                                </div>
                                            </div>
                                            <ul class="pagination pagination-separated pagination-sm mb-0">
                                                <li class="page-item disabled">
                                                    <a href="#" class="page-link">←</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">1</a>
                                                </li>
                                                <li class="page-item active">
                                                    <a href="#" class="page-link">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">→</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Návštevy obchodu podľa zdroja</h4>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown card-header-dropdown">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Stiahnuť report</a>
                                                    <a class="dropdown-item" href="#">Export</a>
                                                    <a class="dropdown-item" href="#">Import</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div id="store-visits-source" data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger", "--vz-info"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Nedávne objednávky</h4>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-soft-info btn-sm shadow-none">
                                                <i class="ri-file-list-3-line align-middle"></i> Vygenerovať report
                                            </button>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="table-responsive table-card">
                                            <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                <thead class="text-muted table-light">
                                                <tr>
                                                    <th scope="col">Číslo obj.</th>
                                                    <th scope="col">Zákazník</th>
                                                    <th scope="col">Produkt</th>
                                                    <th scope="col">Cena</th>
                                                    <th scope="col">Predajca</th>
                                                    <th scope="col">Stav</th>
                                                    <th scope="col">Hodnotenie</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="fw-medium link-primary">#VZ2112</a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="avatar-xs rounded-circle shadow" />
                                                            </div>
                                                            <div class="flex-grow-1">Alex Smith</div>
                                                        </div>
                                                    </td>
                                                    <td>Oblečenie</td>
                                                    <td>
                                                        <span class="text-success">109,00€</span>
                                                    </td>
                                                    <td>Zoetic Fashion</td>
                                                    <td>
                                                        <span class="badge badge-soft-success">Zaplatená</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 fw-medium mb-0">5,0<span class="text-muted fs-11 ms-1">(61 hlasov)</span></h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="fw-medium link-primary">#VZ2111</a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="avatar-xs rounded-circle shadow" />
                                                            </div>
                                                            <div class="flex-grow-1">Jansh Brown</div>
                                                        </div>
                                                    </td>
                                                    <td>Kuchynská linka</td>
                                                    <td>
                                                        <span class="text-success">149,00€</span>
                                                    </td>
                                                    <td>Micro Design</td>
                                                    <td>
                                                        <span class="badge badge-soft-warning">Čaká na spracovanie</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 fw-medium mb-0">4,5<span class="text-muted fs-11 ms-1">(61 hlasov)</span></h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="fw-medium link-primary">#VZ2109</a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="avatar-xs rounded-circle shadow" />
                                                            </div>
                                                            <div class="flex-grow-1">Ayaan Bowen</div>
                                                        </div>
                                                    </td>
                                                    <td>Cyklistické príslušenstvo</td>
                                                    <td>
                                                        <span class="text-success">215,00€</span>
                                                    </td>
                                                    <td>Nesta Technologies</td>
                                                    <td>
                                                        <span class="badge badge-soft-success">Zaplatená</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 fw-medium mb-0">4,9<span class="text-muted fs-11 ms-1">(89 hlasov)</span></h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="fw-medium link-primary">#VZ2108</a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="avatar-xs rounded-circle shadow" />
                                                            </div>
                                                            <div class="flex-grow-1">Prezy Mark</div>
                                                        </div>
                                                    </td>
                                                    <td>Nábytok</td>
                                                    <td>
                                                        <span class="text-success">199,00€</span>
                                                    </td>
                                                    <td>Syntyce Solutions</td>
                                                    <td>
                                                        <span class="badge badge-soft-danger">Nezaplatená</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 fw-medium mb-0">4,3<span class="text-muted fs-11 ms-1">(47 hlasov)</span></h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="fw-medium link-primary">#VZ2107</a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="avatar-xs rounded-circle shadow" />
                                                            </div>
                                                            <div class="flex-grow-1">Vihan Hudda</div>
                                                        </div>
                                                    </td>
                                                    <td>Tašky a Peňaženky</td>
                                                    <td>
                                                        <span class="text-success">330,00€</span>
                                                    </td>
                                                    <td>iTest Factory</td>
                                                    <td>
                                                        <span class="badge badge-soft-success">Zaplatená</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 fw-medium mb-0">4,7<span class="text-muted fs-11 ms-1">(161 hlasov)</span></h5>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-auto layout-rightside-col">
                    <div class="overlay"></div>
                    <div class="layout-rightside">
                        <div class="card h-100 rounded-0">
                            <div class="card-body p-0">
                                <div class="p-3">
                                    <h6 class="text-muted mb-0 text-uppercase fw-semibold">Nedávna aktivity</h6>
                                </div>
                                <div data-simplebar style="max-height: 410px;" class="p-3 pt-0">
                                    <div class="acitivity-timeline acitivity-main">
                                        <div class="acitivity-item d-flex">
                                            <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                                <div class="avatar-title bg-soft-success text-success rounded-circle shadow">
                                                    <i class="ri-shopping-cart-2-line"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Nákup (James Price)</h6>
                                                <p class="text-muted mb-1">Smarthodinky </p>
                                                <small class="mb-0 text-muted">14:14 Dnes</small>
                                            </div>
                                        </div>
                                        <div class="acitivity-item py-3 d-flex">
                                            <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                                <div class="avatar-title bg-soft-danger text-danger rounded-circle shadow">
                                                    <i class="ri-stack-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Pridané <span class="fw-semibold">Kolekcia štýlov</span></h6>
                                                <p class="text-muted mb-1">Od Nesta Technologies</p>
                                                <div class="d-inline-flex gap-2 border border-dashed p-2 mb-2">
                                                    <a href="#" class="bg-light rounded p-1">
                                                        <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="img-fluid d-block" />
                                                    </a>
                                                    <a href="#" class="bg-light rounded p-1">
                                                        <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="img-fluid d-block" />
                                                    </a>
                                                    <a href="#" class="bg-light rounded p-1">
                                                        <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="img-fluid d-block" />
                                                    </a>
                                                </div>
                                                <p class="mb-0 text-muted"><small>21:47 Včera</small></p>
                                            </div>
                                        </div>
                                        <div class="acitivity-item py-3 d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="avatar-xs rounded-circle acitivity-avatar shadow">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Natasha Carey označili, že sa im páčia produkty</h6>
                                                <p class="text-muted mb-1">Povoľte používateľom označiť, že sa im páči produkt.</p>
                                                <small class="mb-0 text-muted">25.12.2021</small>
                                            </div>
                                        </div>
                                        <div class="acitivity-item py-3 d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs acitivity-avatar">
                                                    <div class="avatar-title rounded-circle bg-secondary shadow">
                                                        <i class="mdi mdi-sale fs-14"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Dnešná ponuka od <a href="#" class="link-secondary">Digitech Galaxy</a></h6>
                                                <p class="text-muted mb-2">Ponuka je platná na objednávky Rs.500 a vyššie iba pre zvolené produkty.</p>
                                                <small class="mb-0 text-muted">12.12.2021</small>
                                            </div>
                                        </div>
                                        <div class="acitivity-item py-3 d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs acitivity-avatar">
                                                    <div class="avatar-title rounded-circle bg-soft-danger text-danger shadow">
                                                        <i class="ri-bookmark-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Obľúbený produkt</h6>
                                                <p class="text-muted mb-2">Esther James pridali produkt do obľúbených.</p>
                                                <small class="mb-0 text-muted">25.11.2021</small>
                                            </div>
                                        </div>
                                        <div class="acitivity-item py-3 d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs acitivity-avatar">
                                                    <div class="avatar-title rounded-circle bg-secondary shadow">
                                                        <i class="mdi mdi-sale fs-14"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Bleskový výpredaj začína <span class="text-primary">zajtra</span>.</h6>
                                                <p class="text-muted mb-0">Bleskový výpredaj od <a href="javascript:void(0);" class="link-secondary fw-medium">Zoetic Fashion</a></p>
                                                <small class="mb-0 text-muted">22.10.2021</small>
                                            </div>
                                        </div>
                                        <div class="acitivity-item py-3 d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs acitivity-avatar">
                                                    <div class="avatar-title rounded-circle bg-soft-info text-info shadow">
                                                        <i class="ri-line-chart-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Mesačný report predaja</h6>
                                                <p class="text-muted mb-2"><span class="text-danger">zostávajú 2 dni</span> Notifikácia na odovzdanie mesačného reportu predaja. <a href="javascript:void(0);" class="link-warning text-decoration-underline">Generátor reportov</a></p>
                                                <small class="mb-0 text-muted">15.10.2021</small>
                                            </div>
                                        </div>
                                        <div class="acitivity-item d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="avatar-xs rounded-circle acitivity-avatar shadow" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Frank Hook komentoval</h6>
                                                <p class="text-muted mb-2 fst-italic">" Produkt, ktorý má recenzie má väčšiu šancu predaja ako produkt. "</p>
                                                <small class="mb-0 text-muted">26.08.2021</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-3 mt-2">
                                    <h6 class="text-muted mb-3 text-uppercase fw-semibold">Top 10 kategórií
                                    </h6>

                                    <ol class="ps-3 text-muted">
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Mobily & Príslušenstvo <span class="float-end">(10 294)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Desktop <span class="float-end">(6 256)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Elektronika <span class="float-end">(3 479)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Domov & Nábytok <span class="float-end">(2 275)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Potraviny <span class="float-end">(1 950)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Móda <span class="float-end">(1 582)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Spotrebiče <span class="float-end">(1 037)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Krása, Hračky & Viac <span class="float-end">(924)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Jedlo & Nápoje <span class="float-end">(701)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Hračky & Hry <span class="float-end">(239)</span></a>
                                        </li>
                                    </ol>
                                    <div class="mt-3 text-center">
                                        <a href="javascript:void(0);" class="text-muted text-decoration-underline">Zobraziť všetky kategórie</a>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <h6 class="text-muted mb-3 text-uppercase fw-semibold">Recenzie produktov</h6>
                                    <div class="swiper vertical-swiper" style="height: 250px;">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="card border border-dashed shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 avatar-sm">
                                                                <div class="avatar-title bg-light rounded shadow">
                                                                    <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" height="30">
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div>
                                                                    <p class="text-muted mb-1 fst-italic text-truncate-two-lines">"Skvelý produkt a vyzerá super, veľa funkcií."</p>
                                                                    <div class="fs-11 align-middle text-warning">
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end mb-0 text-muted">
                                                                    - od <cite title="Source Title">Force Medicines</cite>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card border border-dashed shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="avatar-sm rounded shadow">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div>
                                                                    <p class="text-muted mb-1 fst-italic text-truncate-two-lines">"Skvelá šablóna, veľmi jednoduchá na pochopenie a manipuláciu."</p>
                                                                    <div class="fs-11 align-middle text-warning">
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-half-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end mb-0 text-muted">
                                                                    - od <cite title="Source Title">Henry Baird</cite>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card border border-dashed shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 avatar-sm">
                                                                <div class="avatar-title bg-light rounded shadow">
                                                                    <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" height="30">
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div>
                                                                    <p class="text-muted mb-1 fst-italic text-truncate-two-lines">"Nádherný produkt a super zákaznícky servis."</p>
                                                                    <div class="fs-11 align-middle text-warning">
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-line"></i>
                                                                        <i class="ri-star-line"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end mb-0 text-muted">
                                                                    - od <cite title="Source Title">Zoetic Fashion</cite>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card border border-dashed shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="{{ asset('img/image-placeholder.jpg') }}" alt="" class="avatar-sm rounded shadow">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div>
                                                                    <p class="text-muted mb-1 fst-italic text-truncate-two-lines">"Produkt je nádherný. Milujem to."</p>
                                                                    <div class="fs-11 align-middle text-warning">
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-half-fill"></i>
                                                                        <i class="ri-star-line"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end mb-0 text-muted">
                                                                    - od <cite title="Source Title">Nancy Martino</cite>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-3">
                                    <h6 class="text-muted mb-3 text-uppercase fw-semibold">Recenzie zákazníkov</h6>
                                    <div class="bg-light px-3 py-2 rounded-2 mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <div class="fs-16 align-middle text-warning">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <h6 class="mb-0">4,5 z 5</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-muted"><span class="fw-medium">5 500</span> recenzií</div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="row align-items-center g-2">
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0">5 hviezd</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-1">
                                                    <div class="progress bg-soft-success animated-progress progress-sm">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 50.16%" aria-valuenow="50.16" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0 text-muted">2 758</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row align-items-center g-2">
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0">4 hviezd</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-1">
                                                    <div class="progress bg-soft-success animated-progress progress-sm">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 29.32%" aria-valuenow="29.32" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0 text-muted">1 063</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row align-items-center g-2">
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0">3 hviezd</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-1">
                                                    <div class="progress bg-soft-warning animated-progress progress-sm">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 18.12%" aria-valuenow="18.12" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0 text-muted">997</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row align-items-center g-2">
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0">2 hviezdy</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-1">
                                                    <div class="progress bg-soft-success animated-progress progress-sm">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 4.98%" aria-valuenow="4.98" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0 text-muted">227</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row align-items-center g-2">
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0">1 hviezda</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-1">
                                                    <div class="progress bg-soft-danger animated-progress progress-sm">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 7.42%" aria-valuenow="7.42" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0 text-muted">408</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card sidebar-alert bg-light border-0 text-center mx-4 mb-0 mt-3">
                                    <div class="card-body">
                                        <img src="{{ asset('img/image-placeholder.jpg') }}" alt="">
                                        <div class="mt-4">
                                            <h5>Pozvite nového predajcu</h5>
                                            <p class="text-muted lh-base">Prineste nám nového predajcu a získajte 100,00€ za refernciu.</p>
                                            <button type="button" class="btn btn-primary btn-label rounded-pill"><i class="ri-mail-fill label-icon align-middle rounded-pill fs-16 me-2"></i> Prizvite teraz</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection

@section('js')
    <script>
        function formatNumber (number, decimals = 0) {
            return Number(number)
                .toLocaleString('en-US', { minimumFractionDigits: decimals, maximumFractionDigits: decimals })
                .replaceAll(',', ' ')
                .replaceAll('.', ',');
        }

        $('.number-counter').each(function () {
            (function counter (element) {
                let goal = +element.data("goal"), current = + (element.data("current") ?? 0), decimals = +(element.data('decimals') ?? 0), diff = goal / 250, target;

                ( target = (current + diff) ) > goal
                    ? element.html( formatNumber(goal, decimals) )
                    : element.html( formatNumber(target, decimals) ), element.data('current', target), setTimeout( () => counter(element), 1 );
            })( $(this) );
        });
    </script>

    <script src="{{ asset('js/dashboard/dashboard-ecommerce.init.js') }}" type="text/javascript"></script>
@endsection
