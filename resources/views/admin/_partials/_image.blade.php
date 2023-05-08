<div class="image-wrapper mb-3">
    <img src="{{ $thumb }}" class="img-fluid">

    <div class="image-wrapper-back">
        <div class="image-wrapper-back-actions">
            <a href="{{ $image }}" class="show-icon image-popup btn btn-info" data-gallery="{{ $gallery ?? 0 }}">
                <i class="mdi mdi-magnify"></i>
            </a>

            <form action="{{ $delete }}" method="post">
                @csrf
                <button data-type="{{ "Obrázok" }}" data-entity="{{ $entity }}" class="alert-delete delete-icon pointer btn btn-danger" type="button">
                    <i class="mdi mdi-trash-can-outline"></i>
                </button>
            </form>
        </div>
    </div>
</div>
