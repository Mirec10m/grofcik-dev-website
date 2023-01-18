<table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
    <thead>
    <tr>
        <th>#</th>
        <th>Číslo obj.</th>
        <th>Zákazník</th>
        <th>Spôsob platby</th>
        <th>Stav</th>
        <th>Cena</th>
        <th data-orderable="false">Akcie</th>
    </tr>
    </thead>
    <tbody>
    @foreach($orders as $order)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $order->number }}</td>
            <td>{{ $order->customer }}</td>
            <td>
                <i>{{ $order->payment_type }}</i>
            </td>
            <td>
                <span class="badge badge-soft-{{ $order->status_class }}">{{ $order->formatted_status }}</span>
            </td>
            <td>{{ $order->formatted_price }} €</td>
            <td>
                <div class="dropdown d-inline-block">
                    <button class="btn btn-soft-dark btn-sm dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Možnosti
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="{{ route('superadmin.orders.show') }}" class="dropdown-item">
                                <i class="mdi mdi-magnify action-icon"></i> Show
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('superadmin.orders.invoice') }}" class="dropdown-item" target="_blank">
                                <i class="mdi mdi-file-pdf-box action-icon"></i> Invoice
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <form action="{{ route('superadmin.orders.destroy') }}" method="post" style="display: inline-block; width: 100%;">
                                @csrf
                                @method('delete')
                                <button data-entity="{{ 'Položka - ' . 'Lorem ipsum' }}" class="alert-delete dropdown-item pointer" type="button">
                                    <i class="mdi mdi-trash-can-outline action-icon"></i> Vymazať
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
