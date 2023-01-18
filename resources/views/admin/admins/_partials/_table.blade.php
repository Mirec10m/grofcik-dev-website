<table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
    <thead>
    <tr>
        <th>#</th>
        <th>Používateľ</th>
        <th>Email</th>
        <th>Regsitrácia</th>
        <th data-orderable="false">Akcie</th>
    </tr>
    </thead>
    <tbody>
    @foreach($admins as $admin)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $admin->full_name }}</td>
            <td>{{ $admin->email }}</td>
            <td>{{ $admin->formatted_created_at }}</td>
            <td>
                <div class="dropdown d-inline-block">
                    <button class="btn btn-soft-dark btn-sm dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Možnosti
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="{{ route('admins.edit', $admin) }}" class="dropdown-item">
                                <i class="mdi mdi-lead-pencil action-icon"></i> Editovať
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <form action="{{ route('admins.destroy', $admin) }}" method="post" style="display: inline-block; width: 100%;">
                                @csrf
                                @method('delete')
                                <button data-entity="{{ "Administrátor $admin->full_name" }}" class="alert-delete dropdown-item pointer" type="button">
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
