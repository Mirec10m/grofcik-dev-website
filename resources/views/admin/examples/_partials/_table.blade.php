<table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
    <thead>
    <tr>
        <th>#</th>
        <th>Názov</th>
        <th>Typ</th>
        <th>Cena</th>
        <th>Kategória</th>
        <th>Dátum distribúcie</th>
        <th>Akcie</th>
    </tr>
    </thead>
    <tbody>
    @for($i = 1; $i < 101; $i++)
        <tr>
            <td>{{ $i }}</td>
            <td>Lorem ipsum</td>
            <td>Lorem ipsum</td>
            <td>24,99 €</td>
            <td>Lorem ipsum</td>
            <td>05. 12. 2019</td>
            <td>
                <div class="dropdown d-inline-block">
                    <button class="btn btn-soft-dark btn-sm dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Možnosti
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="{{ route('examples.edit') }}" class="dropdown-item">
                                <i class="mdi mdi-lead-pencil action-icon"></i> Editovať
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('examples.gallery') }}" class="dropdown-item">
                                <i class="mdi mdi-image-multiple-outline action-icon"></i> Galéria
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <form action="{{ route('examples.delete') }}" method="post" style="display: inline-block; width: 100%;">
                                @csrf
                                <button data-entity="{{ 'Položka - ' . 'Lorem ipsum' }}" class="alert-delete dropdown-item pointer" type="button">
                                    <i class="mdi mdi-trash-can-outline action-icon"></i> Vymazať
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
    @endfor
    </tbody>
</table>
