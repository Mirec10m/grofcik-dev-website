<table id="" data-order='[[1, "asc"]]' class="datatable table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
    <thead>
    <tr>
        <th data-orderable="false">
            <div class="form-check">
                <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
            </div>
        </th>
        <th data-order="true">#</th>
        <th>Názov</th>
        <th>Typ</th>
        <th>Cena</th>
        <th>Kategória</th>
        <th>Dátum distribúcie</th>
        <th>Dokončené</th>
        <th data-orderable="false">Akcie</th>
    </tr>
    </thead>
    <tbody>
    @for($i = 1; $i < 101; $i++)
        <tr>
            <td>
                <div class="form-check">
                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                </div>
            </td>
            <td>{{ $i }}</td>
            <td>Lorem ipsum</td>
            <td>Lorem ipsum</td>
            <td>24,99 €</td>
            <td>Lorem ipsum</td>
            <td>05. 12. 2019</td>
            <td>
                <i class="mdi {{ $i % 2 ? 'mdi-check-bold text-success' : 'mdi-close-thick text-danger' }} fs-4"></i>
            </td>
            <td>
                <div class="dropdown d-inline-block">
                    <button class="btn btn-soft-dark btn-sm dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Možnosti
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="#" class="dropdown-item">
                                <i class="mdi mdi-lead-pencil action-icon"></i> Editovať
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item">
                                <i class="mdi mdi-image-multiple-outline action-icon"></i> Galéria
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <form action="#" method="post" style="display: inline-block; width: 100%;">
                                @csrf
                                @method('delete')
                                <button data-type="{{ 'Položka' }}" data-entity="{{ 'Lorem ipsum' }}" class="alert-delete dropdown-item pointer" type="button">
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
