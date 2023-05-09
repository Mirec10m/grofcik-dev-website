@if($errors->has($column))
    <ul class="list-no-marker">
        <li class="error-color">
            {{ $errors->first($column) }}
        </li>
    </ul>
@endif
