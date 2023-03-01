<table id="" class="datatable table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
    <thead>
    <tr>
        <th>#</th>
        <th>Názov SK</th>
        @if( config('demibox.blog.categories') )
            <th>Kategória SK</th>
        @endif
        <th>Publikovaný SK</th>
        <th>Vytvorenie</th>
        <th data-orderable="false">Akcie</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->name_sk }}</td>
            @if( config('demibox.blog.categories') )
                <td>
                    @if($post->category)
                        {{ $post->category->name_sk }}
                    @else
                        <i>Bez kategórie</i>
                    @endif
                </td>
            @endif
            <td>
                <i class="mdi {{ $post->published_sk ? 'mdi-check-bold text-success' : 'mdi-close-thick text-danger' }} fs-4"></i>
            </td>
            <td>{{ $post->formatted_created_at }}</td>
            <td>
                <div class="dropdown d-inline-block">
                    <button class="btn btn-soft-dark btn-sm dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Možnosti
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="{{ route('posts.edit', $post) }}" class="dropdown-item">
                                <i class="mdi mdi-lead-pencil action-icon"></i> Editovať
                            </a>
                        </li>
                        @foreach( config('settings.languages') as $key => $lang )
                            <li>
                                <a href="{{ route('posts.show', [ 'post' => $post, 'locale' => $key ]) }}" target="_blank" class="dropdown-item">
                                    <i class="mdi mdi-view-quilt action-icon"></i> Náhľad <span class="text-uppercase">{{ $key }}</span>
                                </a>
                            </li>
                        @endforeach
                        <li class="dropdown-divider"></li>
                        <li>
                            <form action="{{ route('posts.destroy', $post) }}" method="post" style="display: inline-block; width: 100%;">
                                @csrf
                                @method('delete')
                                <button data-type="{{ 'Článok' }}" data-entity="{{ $post->name_sk }}" class="alert-delete dropdown-item pointer" type="button">
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
