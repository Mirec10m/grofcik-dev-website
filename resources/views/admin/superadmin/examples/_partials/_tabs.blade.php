<ul class="nav nav-tabs custom-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active {{ has_language_errors($errors, ['name', 'type', 'short', 'description']) ? 'is-invalid' : '' }}" data-bs-toggle="tab" href="#info" role="tab" aria-selected="false">
            Jazykové mutácie
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ has_errors($errors, ['show', 'price', 'category_id', 'distribution_date']) ? 'is-invalid' : '' }}" data-bs-toggle="tab" href="#errors" role="tab" aria-selected="false">
            Dodatočné info
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ has_errors($errors, ['profile']) ? 'is-invalid' : '' }}" data-bs-toggle="tab" href="#profile" role="tab" aria-selected="false">
            Profilový obrázok
        </a>
    </li>
</ul>
