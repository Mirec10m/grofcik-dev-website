<div class="row mb-3">
    <div class="col-sm-12 col-md-9">

        <div class="row mb-3">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>TinyMCE Editor</label>
                    <textarea name="input4" class="form-control tinymce {{ $errors->has("input4") ? 'parsley-error' : '' }}">{{ old("input4", isset($item) ? $item->input4 : '') }}</textarea>
                    @include('admin._partials._errors', ['column' => "input4"])
                </div>
            </div>
        </div>

    </div>
</div>
