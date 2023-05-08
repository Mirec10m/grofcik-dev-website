<div class="row mb-3">
    <div class="col-sm-12 col-md-9">

        <div class="row mb-3">
            <div class="col-sm-6">
                <label class="form-label">Price (€)</label>
                <input name="input5" type="text" value="{{ old("input5", isset($item) ? $item->input5 : '') }}" class="form-control price-input {{ $errors->has("input5") ? 'is-invalid' : '' }}">
                @include('admin._partials._errors', ['column' => "input5"])
            </div>

            <div class="col-sm-6">
                <div>
                    <label class="form-label">Filestyle</label>
                    <input name="input9" class="form-control filestyle {{ $errors->has('input9') ? 'is-invalid' : '' }}" type="file" data-text="Vybrať súbor" data-btnClass="btn-primary border-left-no-radius">
                    @include('admin._partials._errors', ['column' => 'input9'])
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6">
                <label class="form-label">Symbol on right</label>
                <div class="input-group">
                    <input name="input10" type="text" value="{{ old('input10', (isset($item) ? $item->input10 : '')) }}" class="form-control {{ $errors->has('input10') ? 'is-invalid' : '' }}">
                    <span class="input-group-text">€</span>
                </div>
                @include('admin._partials._errors', ['column' => 'input10'])
            </div>

            <div class="col-sm-6">
                <label class="form-label">Input with icon</label>
                <div class="form-icon">
                    <input name="input11" type="text" value="{{ old('input11', (isset($item) ? $item->input11 : '')) }}" class="form-control form-control-icon {{ $errors->has('input11') ? 'is-invalid' : '' }}">
                    <i class="mdi mdi-clock-outline"></i>
                </div>
                @include('admin._partials._errors', ['column' => 'input11'])
            </div>
        </div>

    </div>
</div>
