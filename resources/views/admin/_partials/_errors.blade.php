@if( $errors->has($column) )
    <div class="invalid-feedback d-block">
        {{ $errors->first($column) }}
    </div>
@endif
