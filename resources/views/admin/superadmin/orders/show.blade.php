@extends('layout.admin')

@section('page-title')
    Orders
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => "Objednávka - $order->number", 'crumbs' => [
                'Úvod' => route('dashboard.index'),
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
                                <u>Telefón: <a href="tel:{ { $order->phone }}" class="phone-number">{{ $order->phone }}</a></u> <br>
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
                                <u>Spolu:</u>: {{ $order->formatted_delivery_payment_price }} €
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

                                <u>Aktuálny stav</u>: <i class="{{ $order->status_class }}">{{ $order->formatted_status }}</i> <br><br>

                                <div class="d-flex">
                                    @if( $order->status != 'storno' || true )
                                        <form action="{{ route('superadmin.orders.status') }}" method="post">
                                            @csrf

                                            <input type="hidden" name="status" value="storno">

                                            <button class="btn btn-danger me-auto" style="margin-right: 5px;">Storno</button>
                                        </form>
                                    @endif

                                    @if( $order->status == 'received' || true )
                                        <form action="{{ route('superadmin.orders.status') }}" method="post">
                                            @csrf

                                            <input type="hidden" name="status" value="shipped">

                                            <button class="btn btn-primary" style="margin-right: 5px;">Odoslaná</button>
                                        </form>
                                    @elseif( $order->status == 'shipped' )
                                        <form action="{{ route('superadmin.orders.status') }}" method="post">
                                            @csrf

                                            <input type="hidden" name="status" value="closed">

                                            <button class="btn btn-primary" style="margin-right: 5px;">Vybavená</button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Položky objednávky</h6>

                            <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Produkt</th>
                                    <th>Jednotková cena</th>
                                    <th>Množstvo</th>
                                    <th>Cena</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order_items as $order_item)
                                    <tr>
                                        <td>{{ $order_items->name }}</td>
                                        <td>{{ $order_items->formatted_unit_price }}</td>
                                        <td>{{ $order_items->amount }}</td>
                                        <td>{{ $order_items->formatted_price }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
