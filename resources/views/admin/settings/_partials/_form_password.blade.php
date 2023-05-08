<div class="row mb-3">
    <div class="col-sm-12 col-md-9">

        <div class="row mb-3">
            <div class="col-sm-6">
                <label class="form-label">Nové heslo</label>
                <input name="password" type="password" class="form-control {{ $errors->has("password") ? 'is-invalid' : '' }}">
                @include('admin._partials._errors', ['column' => "password"])
            </div>

            <div class="col-sm-6">
                <label class="form-label">Opakujte heslo</label>
                <input name="password_confirmation" type="password" class="form-control">
            </div>
        </div>

    </div>
</div>
