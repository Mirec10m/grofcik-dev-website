<div class="image-wrapper mb-3">
    <img src="{{ $thumb }}" class="img-fluid">

    <div class="image-wrapper-back">
        <div class="image-wrapper-back-actions">
            <a href="{{ $image }}" class="show-icon image-popup-vertical-fit btn btn-info">
                <i class="mdi mdi-magnify"></i>
            </a>

            <form action="{{ $delete }}" method="post">
                @csrf
                <button data-entity="{{ "Obrázok - $entity" }}" class="delete-button delete-icon pointer btn btn-danger" type="button">
                    <i class="mdi mdi-trash-can-outline"></i>
                </button>
            </form>
        </div>
    </div>
</div>
