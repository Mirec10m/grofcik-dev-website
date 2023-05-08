<ul class="nav nav-tabs" role="tablist">
    @foreach( config('settings.languages') as $key => $lang )
    <li class="nav-item">
        <a class="nav-link {{ $loop->first ? 'active' : '' }} {{ has_language_errors($errors, $inputs ?? [], $key) ? 'is-invalid' : '' }}" data-bs-toggle="tab" href="#{{ $key }}{{ $key_append ?? '' }}" role="tab" aria-selected="false">
            {{ $lang }}
        </a>
    </li>
    @endforeach
</ul>
