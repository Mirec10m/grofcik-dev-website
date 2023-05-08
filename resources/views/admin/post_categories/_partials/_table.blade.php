<table id="" class="datatable table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
    <thead>
    <tr>
        <th>#</th>
        <th>Názov SK</th>
        <th>Vytvorenie</th>
        <th data-orderable="false">Akcie</th>
    </tr>
    </thead>
    <tbody>
    @foreach($post_categories as $post_category)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post_category->name_sk }}</td>
            <td>{{ $post_category->formatted_created_at }}</td>
            <td>
                <div class="dropdown d-inline-block">
                    <button class="btn btn-soft-dark btn-sm dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Možnosti
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="{{ route('post-categories.edit', $post_category) }}" class="dropdown-item">
                                <i class="mdi mdi-lead-pencil action-icon"></i> Editovať
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <form action="{{ route('post-categories.destroy', $post_category) }}" method="post" style="display: inline-block; width: 100%;">
                                @csrf
                                @method('delete')
                                <button data-type="{{ 'Kategória článku' }}" data-entity="{{ $post_category->name_sk }}" class="alert-delete dropdown-item pointer" type="button">
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
