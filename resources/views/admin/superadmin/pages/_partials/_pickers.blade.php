<div class="row mb-3">
    <div class="col-sm-12 col-md-9">

        <div class="row mb-3">
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

            <div class="col-sm-6">
                <label class="form-label">Colorpicker</label>
                <input id="color" name="color" type="hidden" value="">
                <div class="colorpicker" data-input="#color"></div>
                @include('admin._partials._errors', ['column' => 'input8'])
            </div>
        </div>

    </div>
</div>
