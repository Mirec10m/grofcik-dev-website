<div class="row mb-3">
    <div class="col-sm-12 col-md-9">

        <div class="row mb-3">
            <div class="col-sm-6">
                <label class="form-label">E-mail</label>
                <input type="text" disabled value="{{ $user->email }}" class="form-control">
            </div>

            <div class="col-sm-6">
                <label class="form-label">Používateľské meno</label>
                <input type="text" disabled value="{{ $user->username }}" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6">
                <label class="form-label">Meno</label>
                <input name="name" type="text" value="{{ old("name", isset($user) ? $user->name : '') }}" class="form-control {{ $errors->has("name") ? 'is-invalid' : '' }}">
                @include('admin._partials._errors', ['column' => "name"])
            </div>

            <div class="col-sm-6">
                <label class="form-label">Priezvisko</label>
                <input name="surname" type="text" value="{{ old("surname", isset($user) ? $user->surname : '') }}" class="form-control {{ $errors->has("surname") ? 'is-invalid' : '' }}">
                @include('admin._partials._errors', ['column' => "surname"])
            </div>
        </div>

    </div>
</div>
