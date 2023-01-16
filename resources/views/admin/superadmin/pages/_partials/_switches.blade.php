<div class="row mb-3">
    <div class="col-sm-12 col-md-9">

        <div class="row mb-3">
            <div class="col-sm-6">
                <label class="form-label">Default switch</label>
                <div class="form-check form-switch form-switch-info form-switch-lg">
                    <input name="input6" type="hidden" value="0">
                    <input name="input6" type="checkbox" class="form-check-input {{ $errors->has('input6') ? 'is-invalid' : '' }}" value="1" {{ old('input6') == 1 ? 'checked' : (isset($item) && $item->input6 ? 'checked' : '') }}>
                </div>
                @include('admin._partials._errors', ['column' => 'input6'])
            </div>

            <div class="col-sm-6">
                <label class="form-label">Custom switch with label</label>
                <div class="form-check form-switch form-switch-custom form-switch-primary">
                    <input name="input6" type="hidden" value="0">
                    <input name="input0" type="checkbox" class="form-check-input {{ $errors->has('input0') ? 'is-invalid' : '' }}" value="0" {{ old('input0') == 1 ? 'checked' : (isset($item) && $item->input0 ? 'checked' : '') }}>
                    <label class="form-check-label">Custom switch</label>
                </div>
                @include('admin._partials._errors', ['column' => 'input0'])
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6">
                <label class="form-label">Default checkbox</label>
                <div class="form-check">
                    <input name="input14" type="hidden" value="0">
                    <input name="input14" type="checkbox" class="form-check-input {{ $errors->has('input6') ? 'is-invalid' : '' }}" value="1" {{ old('input6') == 1 ? 'checked' : (isset($item) && $item->input6 ? 'checked' : '') }}>
                </div>
                @include('admin._partials._errors', ['column' => 'input6'])
            </div>

            <div class="col-sm-6">
                <label class="form-label">Outlined checkbox with label</label>
                <div class="form-check form-check-outline form-check-danger">
                    <input name="input13" type="hidden" value="0">
                    <input name="input13" type="checkbox" class="form-check-input {{ $errors->has('input13') ? 'is-invalid' : '' }}" value="0" {{ old('input13') == 1 ? 'checked' : (isset($item) && $item->input13 ? 'checked' : '') }}>
                    <label class="form-check-label">Outlined checkbox</label>
                </div>
                @include('admin._partials._errors', ['column' => 'input13'])
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6">
                <label class="form-label">Default radio</label>
                <div class="form-check form-radio-dark">
                    <input name="input15" value="radio1" type="radio" class="form-check-input {{ $errors->has('input15') ? 'is-invalid' : '' }}" {{ old('input15') == 1 ? 'checked' : (isset($item) && $item->input15 ? 'checked' : '') }}>
                </div>
                @include('admin._partials._errors', ['column' => 'input15'])
            </div>

            <div class="col-sm-6">
                <label class="form-label">Outlined radio with label</label>
                <div class="form-check form-radio-outline form-radio-warning mb-3">
                    <input name="input15" value="radio2" type="radio" class="form-check-input {{ $errors->has('input15') ? 'is-invalid' : '' }}" {{ old('input15') == 1 ? 'checked' : (isset($item) && $item->input15 ? 'checked' : '') }}>
                    <label class="form-check-label">Outlined radio</label>
                </div>
                @include('admin._partials._errors', ['column' => 'input15'])
            </div>
        </div>

    </div>
</div>
