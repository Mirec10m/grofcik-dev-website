<form>
    <div class="row mb-3">
        <div class="col-sm-3">
            <label class="form-label">Free text</label>
            <input name="input1" type="text" value="{{ request("input1") }}" class="form-control">
        </div>

        <div class="col-sm-3">
            <label class="form-label">Switch</label>
            <div class="form-check form-switch form-switch-success form-switch-lg" dir="ltr">
                <input name="input2" type="hidden" value="0">
                <input name="input2" id="show-check" type="checkbox" class="form-check-input" value="1" {{ request('input2') == 1 ? 'checked' : '' }}>
            </div>
        </div>

        <div class="col-sm-3">
            <label class="form-label">Select</label>
            <select name="input3" class="form-control js-example-basic-single">
                <option value="">Vyberte kategóriu</option>
                @foreach(range(1, 5) as $id)
                    <option value="{{ $id }}" {{ request('input3') == $id ? 'selected' : '' }}>
                        Lorem ipsum {{ $id }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-sm-3">
            <label class="form-label">Datepicker</label>
            <div class="input-group">
                <input name="input4" type="text" value="{{ request('input4') }}" class="form-control datepicker">
                <span class="input-group-text">
                <i class="mdi mdi-calendar"></i>
            </span>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-6">
            <label class="form-label">Range slider</label>
            <div class="slider-min-max"
                 data-start-min="{{ request('input5_min') }}" data-min="0" data-input-min="#input5-min"
                 data-start-max="{{ request('input5_max') }}" data-max="1000" data-input-max="#input5-max">
            </div>
            <input type="hidden" name="input5_min" id="input5-min" value="{{ request('input5_min') }}">
            <input type="hidden" name="input5_max" id="input5-max" value="{{ request('input5_max') }}">
        </div>
    </div>

    @include('admin._partials._buttons')
</form>
