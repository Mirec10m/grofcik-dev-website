<div class="tab-content custom-tab-content mb-4">
    <div class="tab-pane p-3 active" id="general" role="tabpanel">
        <div class="row mb-3">
            <div class="col-sm-12 col-md-9">
                @include('admin._partials._lang_tabs', [ 'inputs' => ['name', 'type', 'short'] ])

                <div class="tab-content mb-4">
                    @foreach(config('settings.languages') as $key => $lang)
                        <div class="tab-pane p-3 {{ $loop->first ? 'active' : '' }}" id="{{ $key }}" role="tabpanel">
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label class="form-label">
                                        Názov <span class="text-uppercase">{{ $key }}</span> <span class="text-danger">*</span>
                                    </label>
                                    <input name="name_{{ $key }}" type="text" value="{{ old("name_$key", isset($item) ? $item->{"name_$key"} : '') }}" class="form-control {{ $errors->has("name_$key") ? 'is-invalid' : '' }}">
                                    @include('admin._partials._errors', ['column' => "name_$key"])
                                </div>

                                <div class="col-sm-6">
                                    <label class="form-label">
                                        Typ <span class="text-uppercase">{{ $key }}</span> <span class="text-danger">*</span>
                                    </label>
                                    <input name="type_{{ $key }}" type="text" value="{{ old("type_$key", isset($item) ? $item->{"type_$key"} : '') }}" class="form-control {{ $errors->has("type_$key") ? 'is-invalid' : '' }}">
                                    @include('admin._partials._errors', ['column' => "type_$key"])
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <label class="form-label">
                                        Krátky popis <span class="text-uppercase">{{ $key }}</span> (max. 255 znakov) <span class="text-danger">*</span>
                                    </label>
                                    <textarea name="short_{{ $key }}" class="form-control {{ $errors->has("short_$key") ? 'is-invalid' : '' }}">{{ old("short_$key", isset($item) ? $item->{"short_$key"} : '') }}</textarea>
                                    @include('admin._partials._errors', ['column' => "short_$key"])
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane p-3" id="description" role="tabpanel">
        <div class="row mb-3">
            <div class="col-sm-12 col-md-9">
                @include('admin._partials._lang_tabs', [ 'inputs' => ['description'] ])

                <div class="tab-content mb-4">
                    @foreach(config('settings.languages') as $key => $lang)
                        <div class="tab-pane p-3 {{ $loop->first ? 'active' : '' }}" id="{{ $key }}" role="tabpanel">
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>
                                            Podrobný popis
                                            <span class="text-uppercase">{{ $key }}</span>
                                            <span class="text-danger">*</span>
                                        </label>
                                        <textarea name="description_{{ $key }}" class="form-control tinymce {{ $errors->has("description_$key") ? 'parsley-error' : '' }}">{{ old("description_$key", isset($item) ? $item->{"description_$key"} : '') }}</textarea>
                                        @include('admin._partials._errors', ['column' => "description_$key"])
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane p-3" id="pricing" role="tabpanel">
        <div class="row mb-3">
            <div class="col-sm-12 col-md-9">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label class="form-label">
                            Cena <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            <input name="price" type="text" value="{{ old('price', (isset($item) ? $item->price : '')) }}" class="price-input form-control {{ $errors->has('price') ? 'is-invalid' : '' }}">
                            <span class="input-group-text">€</span>
                        </div>
                        @include('admin._partials._errors', ['column' => 'price'])
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label">Cena s DPH</label>
                        <div class="input-group">
                            <input readonly name="price_vat" type="text" value="{{ old('price_vat', (isset($item) ? $item->price_vat : '')) }}" class="price-input form-control {{ $errors->has('price_vat') ? 'is-invalid' : '' }}">
                            <span class="input-group-text">€</span>
                        </div>
                        @include('admin._partials._errors', ['column' => 'price_vat'])
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label class="form-label">DPH</label>
                        <div class="form-check form-switch form-switch-info form-switch-lg" dir="ltr">
                            <input name="vat" type="hidden" value="0">
                            <input name="vat" type="checkbox" class="form-check-input {{ $errors->has('vat') ? 'is-invalid' : '' }}" value="1" {{ old('vat') == 1 ? 'checked' : (isset($item) && $item->vat ? 'checked' : '') }}>
                        </div>
                        @include('admin._partials._errors', ['column' => 'vat'])
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label">Zľava</label>
                        <div class="input-group">
                            <input name="discount" type="number" step="0.01" min="0" max="100" value="{{ old('discount', (isset($item) ? $item->discount : '')) }}" class="form-control {{ $errors->has('discount') ? 'is-invalid' : '' }}">
                            <span class="input-group-text">%</span>
                        </div>
                        @include('admin._partials._errors', ['column' => 'discount'])
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="tab-pane p-3" id="image" role="tabpanel">
        <div class="row mb-3">
            <div class="col-sm-12 col-md-9">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <div>
                            <label class="form-label">
                                Profilový obrázok <span class="text-danger">*</span>
                            </label>
                            <input name="profile" class="form-control filestyle {{ $errors->has('profile') ? 'is-invalid' : '' }}" type="file" data-text="Vybrať súbor" data-btnClass="btn-primary border-left-no-radius">
                            @include('admin._partials._errors', ['column' => 'profile'])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane p-3" id="other" role="tabpanel">
        <div class="row mb-3">
            <div class="col-sm-12 col-md-9">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label class="form-label">
                            Kategória <span class="text-danger">*</span>
                        </label>
                        <select name="category_id" class="form-control js-example-basic-single">
                            <option value="">Vyberte kategóriu</option>
                            @for($i = 0; $i < 5; $i++)
                                <option value="{{ $i + 1 }}{{-- $category->id --}}" {{-- old('category_id') == $category->id ? 'selected' : (isset($item) && $item->category_id == $category->id ? 'selected' : '') --}}>
                                    {{-- $category->name_sk --}}
                                    Lorem ipsum
                                </option>
                            @endfor
                        </select>
                        @include('admin._partials._errors', ['column' => 'category_id'])
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label">
                            Na sklade <span class="text-danger">*</span>
                        </label>
                        <input name="in_stock" type="number" step="1" min="0" value="{{ old("in_stock", isset($item) ? $item->in_stock : '') }}" class="form-control {{ $errors->has("in_stock") ? 'is-invalid' : '' }}">
                        @include('admin._partials._errors', ['column' => "in_stock"])
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label class="form-label">
                            Dátum naskladnenia <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            <input name="stored_date" type="text" value="{{ old('stored_date', (isset($item) ? $item->stored_date : '')) }}" class="form-control {{ $errors->has('stored_date') ? 'is-invalid' : '' }}" data-provider="flatpickr" data-date-format="Y-m-d">
                            <span class="input-group-text">
                                <i class="mdi mdi-calendar"></i>
                            </span>
                        </div>
                        @include('admin._partials._errors', ['column' => 'stored_date'])
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label">Zobraziť</label>
                        <div class="form-check form-switch form-switch-info form-switch-lg" dir="ltr">
                            <input name="visible" type="hidden" value="0">
                            <input name="visible" type="checkbox" class="form-check-input {{ $errors->has('visible') ? 'is-invalid' : '' }}" value="1" {{ old('visible') == 1 ? 'checked' : (isset($item) && $item->visible ? 'checked' : '') }}>
                        </div>
                        @include('admin._partials._errors', ['column' => 'visible'])
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="tab-pane p-3" id="seo" role="tabpanel">
        <div class="row mb-3">
            <div class="col-sm-12 col-md-9">
                @include('admin._partials._lang_tabs', [ 'inputs' => ['seo.url', 'seo.title', 'seo.description', 'seo.canonical', 'seo.image'] ])

                <div class="tab-content mb-4">
                    @foreach(config('settings.languages') as $key => $lang)
                        <div class="tab-pane p-3 {{ $loop->first ? 'active' : '' }}" id="{{ $key }}" role="tabpanel">
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label class="form-label">
                                        URL <span class="text-uppercase">{{ $key }}</span>
                                    </label>
                                    <input disabled name="seo.url_{{ $key }}" type="text" value="{{ isset($item) ? "URL/" . $item->{"slug_$key"} : '' }}" class="form-control {{ $errors->has("seo.url_$key") ? 'is-invalid' : '' }}">
                                </div>

                                <div class="col-sm-6">
                                    <label class="form-label">
                                        Titulok <span class="text-uppercase">{{ $key }}</span> (title)
                                    </label>
                                    <input name="seo[title_{{ $key }}]" type="text" value="{{ old("seo.title_$key", $item->seo->{"title_$key"} ?? '') }}" class="form-control {{ $errors->has("seo.title_$key") ? 'is-invalid' : '' }}">
                                    @include('admin._partials._errors', ['column' => "seo.title_$key"])
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <label class="form-label">
                                        Popis <span class="text-uppercase">{{ $key }}</span> (meta description) (max. 255 znakov)
                                    </label>
                                    <textarea name="seo[description_{{ $key }}]" class="form-control {{ $errors->has("seo.description_$key") ? 'is-invalid' : '' }}">{{ old("seo.description_$key", $item->seo->{"description_$key"} ?? '') }}</textarea>
                                    @include('admin._partials._errors', ['column' => "seo.description_$key"])
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label class="form-label">
                                        Kanonická URL <span class="text-uppercase">{{ $key }}</span> (canonical)
                                    </label>
                                    <input name="seo[canonical_{{ $key }}]" type="text" value="{{ old("seo.canonical_$key", $item->seo->{"canonical_$key"} ?? '') }}" class="form-control {{ $errors->has("seo.canonical_$key") ? 'is-invalid' : '' }}">
                                    @include('admin._partials._errors', ['column' => "seo.canonical_$key"])
                                </div>

                                <div class="col-sm-6">
                                    <label class="form-label">
                                        Obrázok - náhľad <span class="text-uppercase">{{ $key }}</span> (OG image)
                                    </label>
                                    <input name="seo[image_{{ $key }}]" class="form-control filestyle {{ $errors->has("seo.image_$key") ? 'is-invalid' : '' }}" type="file" data-text="Vybrať súbor" data-btnClass="btn-primary border-left-no-radius">
                                    @include('admin._partials._errors', ['column' => "seo.image_$key"])
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
