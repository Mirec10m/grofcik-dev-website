<div class="list-group-item nested-1 post-block {{ ( $with_errors ?? false ) && $errors->has("items.$index.*") ? 'is-invalid-border' : '' }}" data-post-item="{{ $index ?? '' }}">
    @if( $post_item && isset($post_item->id) && $index )
        <input disabled name="items[{{ $index }}][id]" type="hidden" value="{{ $post_item->id }}">
    @endif
    <input disabled name="items[{{ $index ?? '' }}][order]" class="post-block-order" type="hidden" value="{{ $post_item?->order }}">
    <input disabled name="items[{{ $index ?? '' }}][type]" type="hidden" value="{{ $post_item?->type }}">
    <div class="post-block-info">
        <i class="pattern-icon fs-16 align-middle text-primary me-2"></i>
        <div class="post-block-name pattern-name {{ ( $with_errors ?? false ) && $errors->has("items.$index.*") ? 'is-invalid-icon' : '' }}"></div>
        <div class="post-block-description text-muted pattern-description"></div>
    </div>
    <div class="post-block-actions">
        <i class="ri-drag-move-fill post-block-handle"></i>
        <div class="row mb-4">
            <div class="col-sm-6">
                <div class="dropdown d-inline-block ignore-click">
                    <button class="border-0 p-0 bg-transparent dropdown" data-bs-toggle="dropdown" type="button" aria-expanded="false">
                        <i class="ri-settings-2-line"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item post-blocks-remove pattern-entity-name" data-type="{{ 'Blok' }}" data-entity="" data-post-item="{{ $index ?? '' }}">
                                <i class="ri-delete-bin-2-line action-icon"></i> Vymazať
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
