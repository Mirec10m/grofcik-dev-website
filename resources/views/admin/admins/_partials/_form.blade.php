<div class="tab-content custom-tab-content mb-4">
    <div class="tab-pane p-3 active" id="info" role="tabpanel">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label class="form-label">
                            Meno <span class="text-danger">*</span>
                        </label>
                        <input name="name" type="text" value="{{ old("name", $admin->name ?? '') }}" class="form-control {{ $errors->has("name") ? 'is-invalid' : '' }}">
                        @include('admin._partials._errors', ['column' => "name"])
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label">
                            Priezvisko <span class="text-danger">*</span>
                        </label>
                        <input name="surname" type="text" value="{{ old("surname", $admin->surname ?? '') }}" class="form-control {{ $errors->has("surname") ? 'is-invalid' : '' }}">
                        @include('admin._partials._errors', ['column' => "surname"])
                    </div>
                </div>

                @if( ! isset($admin) )
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <label class="form-label">
                                Používateľské meno <span class="text-danger">*</span>
                            </label>
                            <input name="username" type="text" value="{{ old("username", $admin->username ?? '') }}" class="form-control {{ $errors->has("username") ? 'is-invalid' : '' }}">
                            @include('admin._partials._errors', ['column' => "username"])
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label">
                                E-mail <span class="text-danger">*</span>
                            </label>
                            <input name="email" type="text" value="{{ old("email", $admin->email ?? '') }}" class="form-control {{ $errors->has("email") ? 'is-invalid' : '' }}">
                            @include('admin._partials._errors', ['column' => "email"])
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <label class="form-label">
                                Heslo <span class="text-danger">*</span>
                            </label>
                            <input name="password" type="password" value="" class="form-control {{ $errors->has("password") ? 'is-invalid' : '' }}">
                            @include('admin._partials._errors', ['column' => "password"])
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label">
                                Zopakujte heslo <span class="text-danger">*</span>
                            </label>
                            <input name="password_confirmation" type="password" value="" class="form-control">
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
