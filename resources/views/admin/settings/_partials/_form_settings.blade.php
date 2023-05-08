<div class="row mb-3">
    <div class="col-sm-12">

        <div class="row mb-3">
            <div class="col-sm-6">
                <label class="form-label">Pripnúť menu</label>
                <div class="form-check form-switch form-switch-info form-switch-lg" dir="ltr">
                    <input name="menu_pinned" type="hidden" value="0">
                    <input name="menu_pinned" type="checkbox" class="form-check-input {{ $errors->has('menu_pinned') ? 'is-invalid' : '' }}" value="1" {{ old("menu_pinned", $user->menu_pinned) ? 'checked' : '' }}>
                </div>
                @include('admin._partials._errors', ['column' => 'menu_pinned'])
            </div>
        </div>

    </div>
</div>
