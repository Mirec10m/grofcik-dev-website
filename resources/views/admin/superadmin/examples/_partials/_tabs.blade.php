<ul class="nav nav-tabs custom-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active {{ has_language_errors($errors, ['name', 'type', 'short']) ? 'is-invalid' : '' }}" data-bs-toggle="tab" href="#general" role="tab" aria-selected="false">
            <i class="mdi mdi-pencil"></i>
            Všeobecné
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ has_language_errors($errors, ['description']) ? 'is-invalid' : '' }}" data-bs-toggle="tab" href="#description" role="tab" aria-selected="false">
            <i class="mdi mdi-format-text"></i>
            Popis
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ has_errors($errors, ['price', 'vat', 'price_vat', 'discount']) ? 'is-invalid' : '' }}" data-bs-toggle="tab" href="#pricing" role="tab" aria-selected="false">
            <i class="mdi mdi-currency-eur"></i>
            Cena
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ has_errors($errors, ['profile']) ? 'is-invalid' : '' }}" data-bs-toggle="tab" href="#image" role="tab" aria-selected="false">
            <i class="mdi mdi-image"></i>
            Obrázok
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ has_errors($errors, ['category_id', 'in_stock', 'stored_date', 'show']) ? 'is-invalid' : '' }}" data-bs-toggle="tab" href="#other" role="tab" aria-selected="false">
            <i class="mdi mdi-format-list-bulleted"></i>
            Ostatné
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ has_language_errors($errors, ['seo.title', 'seo.description', 'seo.canonical', 'seo.image']) ? 'is-invalid' : '' }}" data-bs-toggle="tab" href="#seo" role="tab" aria-selected="false">
            <i class="mdi mdi-web"></i>
            SEO
        </a>
    </li>
</ul>
