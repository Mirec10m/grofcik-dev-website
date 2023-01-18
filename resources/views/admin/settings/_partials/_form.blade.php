<div class="row mb-3">
    <div class="col-sm-12">

        <div class="row mb-3">
            <div class="col-sm-6">
                <label class="form-label">Meno</label>
                <input name="name" type="text" value="{{ old("name", $user->name ?? '') }}" class="form-control {{ $errors->has("name") ? 'is-invalid' : '' }}">
                @include('admin._partials._errors', ['column' => "name"])
            </div>

            <div class="col-sm-6">
                <label class="form-label">Priezvisko</label>
                <input name="surname" type="text" value="{{ old("surname", $user->surname ?? '') }}" class="form-control {{ $errors->has("surname") ? 'is-invalid' : '' }}">
                @include('admin._partials._errors', ['column' => "surname"])
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6">
                <label class="form-label">Poizícia</label>
                <input name="position" type="text" value="{{ $user->position ?? 'Zamestnanec' }}" class="form-control">
                @include('admin._partials._errors', ['column' => "position"])
            </div>

            <div class="col-sm-6">
                <label class="form-label">E-mail</label>
                <input disabled type="text" value="{{ $user->email ?? '' }}" class="form-control">
                @include('admin._partials._errors', ['column' => "email"])
            </div>
        </div>

    </div>
</div>
