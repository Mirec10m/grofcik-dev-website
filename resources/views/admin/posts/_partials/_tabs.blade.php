<ul class="nav nav-tabs custom-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active {{ has_language_errors($errors, ['name', 'published', 'slug', 'short']) || has_errors($errors, ['post_category_id', 'tags', 'tags.*']) ? 'is-invalid' : '' }}" data-bs-toggle="tab" href="#info" role="tab" aria-selected="false">
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

    <li class="nav-item">
        <a class="nav-link {{ has_errors($errors, []) ? 'is-invalid' : '' }}" data-bs-toggle="tab" href="#seo" role="tab" aria-selected="false">
            <i class="mdi mdi-cog mr-6"></i>
            SEO
        </a>
    </li>
</ul>
