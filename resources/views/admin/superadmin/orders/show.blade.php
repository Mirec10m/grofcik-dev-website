@extends('layout.admin')

@section('page-title')
    Orders
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => "Objednávka - $order->number", 'crumbs' => [
                'Úvod' => route('dashboard.index'),
                'Superadmin' => null,
                'Orders' => route('superadmin.orders.index'),
            ]])

            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Fakturačné údaje</h6>

                            <div>
                                <u>Meno</u>: {{ $order->customer }} <br>
                                <u>Adresa</u>: {{ $order->address }} <br>
                                <u>Mesto</u>: {{ $order->city }} <br>
                                <u>PSČ</u>: {{ $order->postal_code }} <br><br>
                                <u>Telefón:</u> <a href="tel:{ { $order->phone }}" class="phone-number">{{ $order->phone }}</a> <br>
                                <u>E-mail</u>: <a href="mailto:{ { $order->email }}" class="storno">{{ $order->email }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Dodacie údaje</h6>

                            <div>
                                <u>Meno</u>: {{ $order->customer }} <br>
                                <u>Adresa</u>: {{ $order->address }} <br>
                                <u>Mesto</u>: {{ $order->city }} <br>
                                <u>PSČ</u>: {{ $order->postal_code }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Doprava a platba</h6>

                            <div>
                                <u>Doprava</u>: {{ $order->delivery_type }} <br>
                                <u>Platba</u>: {{ $order->payment_type }} <br><br>
                                <u>Cena dopravy</u>: {{ $order->formatted_delivery_price }} € <br>
                                <u>Cena platby</u>: {{ $order->formatted_payment_price }} € <br>
                                <u>Spolu</u>: {{ $order->formatted_delivery_payment_price }} €
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Stav objednávky</h6>

                            <div>
                                <u>Vytvorená</u>: {{ $order->formatted_created_at }} <br>
                                <u>Naposledy upravená</u>:

                                <hr>

                                <u>Aktuálny stav</u>: <i class="text-{{ $order->status_class }}">{{ $order->formatted_status }}</i> <br><br>

                                <div class="d-flex">
                                    @if( $order->status != 'storno' )
                                        <form action="{{ route('superadmin.orders.status') }}" method="post" class="me-auto">
                                            @csrf

                                            <input type="hidden" name="status" value="storno">

                                            <button class="btn btn-danger alert-confirm-status" type="button"
                                                    data-title="Storno Objednávka č. {{ $order->number }}"
                                                    data-message="Naozaj chcete stornovať <b>Objednávka č. {{ $order->number }}</b>?"
                                                    data-confirm-class="danger">
                                                Storno
                                            </button>
                                        </form>
                                    @endif

                                    @if( $order->status == 'received' )
                                        <form action="{{ route('superadmin.orders.status') }}" method="post">
                                            @csrf

                                            <input type="hidden" name="status" value="shipped">

                                            <button class="btn btn-primary alert-confirm-status" type="button"
                                                    data-title="Zmeniť stav pre Objednávka č. {{ $order->number }}"
                                                    data-message="Naozaj chcete zmeniť stav pre Objednávka č. {{ $order->number }} na <b>odoslaná</b>?">
                                                Odoslaná
                                            </button>
                                        </form>
                                    @elseif( $order->status == 'shipped' )
                                        <form action="{{ route('superadmin.orders.status') }}" method="post">
                                            @csrf

                                            <input type="hidden" name="status" value="closed">

                                            <button class="btn btn-primary alert-confirm-status" type="button"
                                                    data-title="Zmeniť stav pre Objednávka č. {{ $order->number }}"
                                                    data-message="Naozaj chcete zmeniť stav pre Objednávka č. {{ $order->number }} na <b>uzavretá</b>?">
                                                Uzavretá
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title mb-20px">Položky objednávky</h6>

                            <table id="" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Produkt</th>
                                    <th>Cena</th>
                                    <th>Množstvo</th>
                                    <th>Spolu</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order->order_items as $order_item)
                                    <tr>
                                        <td>{{ $order_item->name }}</td>
                                        <td>{{ $order_item->formatted_unit_price }} €</td>
                                        <td>{{ $order_item->quantity }}</td>
                                        <td>{{ $order_item->formatted_full_price }} €</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title mb-20px">Zhrnutie objednávky</h6>

                            <div class="row justify-content-end">
                                <div class="col-lg-3">
                                    Cena objednávky:
                                    <br>
                                    Doprava a platba:
                                </div>

                                <div class="col-lg-3">
                                    <b>{{ $order->formatted_items_price }} €</b>
                                    <br>
                                    <b>{{ $order->formatted_delivery_payment_price }} €</b>
                                </div>
                            </div>

                            <hr>

                            <div class="row justify-content-end">
                                <div class="col-lg-3">
                                    Spolu:
                                </div>

                                <div class="col-lg-3">
                                    <b>{{ $order->formatted_full_price }} €</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
