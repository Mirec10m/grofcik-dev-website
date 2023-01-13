<div class="row mb-3">
    <div class="col-sm-12 col-md-9">
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
