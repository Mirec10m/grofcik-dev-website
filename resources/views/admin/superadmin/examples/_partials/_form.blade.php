<div class="row mb-3">
    <div class="col-sm-12 col-md-9">
        @include('admin._partials._lang_tabs')

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
                                Krátky popis <span class="text-uppercase">{{ $key }}</span> (max. 150 znakov) <span class="text-danger">*</span>
                            </label>
                            <textarea name="short_{{ $key }}" class="form-control {{ $errors->has("short_$key") ? 'is-invalid' : '' }}">{{ old("short_$key", isset($item) ? $item->{"short_$key"} : '') }}</textarea>
                            @include('admin._partials._errors', ['column' => "short_$key"])
                        </div>
                    </div>

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

        <div class="row mb-3">
            <div class="col-sm-6">
                <label class="form-label">Cena za kus (€)</label>
                <input name="price" type="text" value="{{ old("price", isset($item) ? $item->price : '') }}" class="form-control price-input {{ $errors->has("price") ? 'is-invalid' : '' }}">
                @include('admin._partials._errors', ['column' => "price"])
            </div>

            <div class="col-sm-2">
                <label class="form-label">Zobraziť</label>
                <div class="form-check form-switch form-switch-info form-switch-lg" dir="ltr">
                    <input name="show" type="hidden" value="0">
                    <input name="show" id="show-check" type="checkbox" class="form-check-input {{ $errors->has('show') ? 'is-invalid' : '' }}" value="1" {{ old('show') == 1 ? 'checked' : (isset($item) && $item->show ? 'checked' : '') }}>
                    @include('admin._partials._errors', ['column' => 'show'])
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6">
                <label class="form-label">Kategória <span class="text-danger">*</span></label>
                <select class="form-control js-example-basic-single">
                    <option value="">Vyberte kategóriu</option>
                    @for($i = 0; $i < 5; $i++)
                        <option value="{{-- $category->id --}}" {{-- old('category_id') == $category->id ? 'selected' : (isset($item) && $item->category_id == $category->id ? 'selected' : '') --}}>
                            {{-- $category->name_sk --}}
                            Lorem ipsum
                        </option>
                    @endfor
                </select>
                @include('admin._partials._errors', ['column' => 'category_id'])
            </div>

            <div class="col-sm-6">
                <label class="form-label">Nasledujúci deň distribúcie</label>
                <div class="input-group">
                    <input name="distribution_date" type="text" value="{{ old('distribution_date', (isset($item) ? $item->distribution_date : '')) }}" class="form-control {{ $errors->has('distribution_date') ? 'is-invalid' : '' }}" data-provider="flatpickr" data-date-format="Y-m-d">
                    <span class="input-group-text">
                        <i class="mdi mdi-calendar"></i>
                    </span>
                </div>
                @include('admin._partials._errors', ['column' => 'distribution_date'])
            </div>
        </div>

    </div>
</div>
