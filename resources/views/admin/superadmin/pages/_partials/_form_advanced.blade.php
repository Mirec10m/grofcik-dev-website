<div class="row mb-3">
    <div class="col-sm-12 col-md-9">
        @include('admin._partials._lang_tabs')

        <div class="tab-content mb-4">
            @foreach(config('settings.languages') as $key => $lang)
                <div class="tab-pane p-3 {{ $loop->first ? 'active' : '' }}" id="{{ $key }}" role="tabpanel">
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <label class="form-label">
                                Free text <span class="text-uppercase">{{ $key }}</span>
                            </label>
                            <input name="input1_{{ $key }}" type="text" value="{{ old("input1_$key", isset($item) ? $item->{"input1_$key"} : '') }}" class="form-control {{ $errors->has("input1_$key") ? 'is-invalid' : '' }}">
                            @include('admin._partials._errors', ['column' => "input1_$key"])
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label">
                                Required <span class="text-uppercase">{{ $key }}</span> <span class="text-danger">*</span>
                            </label>
                            <input name="input2_{{ $key }}" type="text" value="{{ old("input2_$key", isset($item) ? $item->{"input2_$key"} : '') }}" class="form-control {{ $errors->has("input2_$key") ? 'is-invalid' : '' }}">
                            @include('admin._partials._errors', ['column' => "input2_$key"])
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="form-label">
                                Textarea <span class="text-uppercase">{{ $key }}</span> (max. 150 znakov)
                            </label>
                            <textarea name="input3_{{ $key }}" class="form-control {{ $errors->has("input3_$key") ? 'is-invalid' : '' }}">{{ old("input3_$key", isset($item) ? $item->{"input3_$key"} : '') }}</textarea>
                            @include('admin._partials._errors', ['column' => "input3_$key"])
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>
                                    TinyMCE Editor
                                    <span class="text-uppercase">{{ $key }}</span>
                                </label>
                                <textarea name="input4_{{ $key }}" class="form-control tinymce {{ $errors->has("input4_$key") ? 'parsley-error' : '' }}">{{ old("input4_$key", isset($item) ? $item->{"input4_$key"} : '') }}</textarea>
                                @include('admin._partials._errors', ['column' => "input4_$key"])
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row mb-3">
            <div class="col-sm-6">
                <label class="form-label">Price (€)</label>
                <input name="input5" type="text" value="{{ old("input5", isset($item) ? $item->input5 : '') }}" class="form-control price-input {{ $errors->has("input5") ? 'is-invalid' : '' }}">
                @include('admin._partials._errors', ['column' => "input5"])
            </div>

            <div class="col-sm-2">
                <label class="form-label">Switch</label>
                <div class="form-check form-switch form-switch-success form-switch-lg" dir="ltr">
                    <input name="input6" type="hidden" value="0">
                    <input name="input6" id="show-check" type="checkbox" class="form-check-input {{ $errors->has('input6') ? 'is-invalid' : '' }}" value="1" {{ old('input6') == 1 ? 'checked' : (isset($item) && $item->input6 ? 'checked' : '') }}>
                    @include('admin._partials._errors', ['column' => 'input6'])
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6">
                <label class="form-label">Select</label>
                <select name="input7" class="form-control js-example-basic-single">
                    <option value="">Vyberte kategóriu</option>
                    @foreach(range(1, 5) as $id)
                        <option value="{{ $id }}" {{ old('input7') == $id ? 'selected' : (isset($item) && $item->category_id == $category->id ? 'selected' : '') }}>
                            Lorem ipsum {{ $id }}
                        </option>
                    @endforeach
                </select>
                @include('admin._partials._errors', ['column' => 'input7'])
            </div>

            <div class="col-sm-6">
                <label class="form-label">Datepicker</label>
                <div class="input-group">
                    <input name="input8" type="text" value="{{ old('input8', (isset($item) ? $item->input8 : '')) }}" class="form-control datepicker {{ $errors->has('input8') ? 'is-invalid' : '' }}">
                    <span class="input-group-text">
                        <i class="mdi mdi-calendar"></i>
                    </span>
                </div>
                @include('admin._partials._errors', ['column' => 'input8'])
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6">
                <div>
                    <label class="form-label">Filestyle</label>
                    <input name="input9" class="form-control filestyle {{ $errors->has('input9') ? 'is-invalid' : '' }}" type="file" data-text="Vybrať súbor" data-btnClass="btn-primary border-left-no-radius">
                    @include('admin._partials._errors', ['column' => 'input9'])
                </div>
            </div>

            <div class="col-sm-6">
                <label class="form-label">Symbol on right</label>
                <div class="input-group">
                    <input name="input10" type="text" value="{{ old('input10', (isset($item) ? $item->input10 : '')) }}" class="form-control {{ $errors->has('input10') ? 'is-invalid' : '' }}">
                    <span class="input-group-text">€</span>
                </div>
                @include('admin._partials._errors', ['column' => 'input10'])
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6">
                <label class="form-label">Input with icon</label>
                <div class="form-icon">
                    <input name="input11" type="text" value="{{ old('input11', (isset($item) ? $item->input11 : '')) }}" class="form-control form-control-icon {{ $errors->has('input11') ? 'is-invalid' : '' }}">
                    <i class="mdi mdi-clock-outline"></i>
                </div>
                @include('admin._partials._errors', ['column' => 'input11'])
            </div>

            <div class="col-sm-6">
                <label class="form-label">Multi select</label>
                <select class="js-example-basic-multiple" name="input12[]" multiple="multiple">
                    @foreach(range(1, 5) as $id)
                        <option value="{{ $id }}" {{ old('input12') == $id ? 'selected' : (isset($item) && $item->category_id == $category->id ? 'selected' : '') }}>
                            Lorem ipsum {{ $id }}
                        </option>
                    @endforeach
                </select>
                @include('admin._partials._errors', ['column' => 'input12'])
            </div>
        </div>

    </div>
</div>
