<ul class="nav nav-tabs custom-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active {{ has_language_errors($errors, ['name', 'published', 'slug', 'short']) ? 'is-invalid' : '' }}" data-bs-toggle="tab" href="#info" role="tab" aria-selected="false">
            <i class="mdi mdi-pencil mr-6"></i>
            Všeobecné
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ has_errors($errors, ['items', 'items.*']) ? 'is-invalid' : '' }}" data-bs-toggle="tab" href="#content" role="tab" aria-selected="false">
            <i class="mdi mdi-format-list-bulleted mr-6"></i>
            Obsah
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ has_errors($errors, ['profile']) ? 'is-invalid' : '' }}" data-bs-toggle="tab" href="#image" role="tab" aria-selected="false">
            <i class="mdi mdi-image mr-6"></i>
            Obrázok
        </a>
    </li>

    @if( config('demibox.blog.categories') || config('demibox.blog.tags') )
        <li class="nav-item">
            <a class="nav-link {{ has_errors($errors, ['category_id', 'tags', 'tags.*']) ? 'is-invalid' : '' }}" data-bs-toggle="tab" href="#other" role="tab" aria-selected="false">
                <i class="mdi mdi-format-list-bulleted mr-6"></i>
                Ostatné
            </a>
        </li>
    @endif
</ul>
