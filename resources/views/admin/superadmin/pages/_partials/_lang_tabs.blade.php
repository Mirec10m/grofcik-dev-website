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
                </div>
            @endforeach
        </div>

    </div>
</div>
