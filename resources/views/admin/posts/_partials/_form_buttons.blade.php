<div class="col-sm-6 text-end">
    @if( isset($post) )
        <div class="dropdown d-inline-block">
            <button class="btn btn-primary dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-view-quilt pe-2"></i> Náhľad
            </button>
            <ul class="dropdown-menu">
                @foreach( config('settings.languages') as $key => $lang )
                    <li>
                        <button type="button" class="dropdown-item post-preview" data-locale="{{ $key }}">
                            {{ $lang }}
                        </button>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <a href="{{ route('posts.index') }}" class="btn btn-primary waves-effect waves-light">
        <i class="mdi mdi-format-list-bulleted pe-2"></i> Zoznam článkov
    </a>
</div>
