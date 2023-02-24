<div class="post-item-content row mb-3" data-post-item="{{ $index ?? '' }}">
    <div class="col-sm-12">
        <ul class="nav nav-tabs" role="tablist">
            @foreach( config('settings.languages') as $key => $lang )
                <li class="nav-item">
                    <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-bs-toggle="tab" href="#{{ $key }}{{ isset($index) ? "_$index" : '' }}" role="tab" aria-selected="false">
                        {{ $lang }}
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="tab-content mb-4">
            @foreach( config('settings.languages') as $key => $lang )
                <div class="tab-pane p-3 {{ $loop->first ? 'active' : '' }}" id="{{ $key }}{{ isset($index) ? "_$index" : '' }}" role="tabpanel">
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>
                                    Obsah
                                    <span class="text-uppercase">{{ $key }}</span>
                                </label>
                                <textarea disabled name="items[{{ $index ?? '' }}][paragraph_text_{{ $key }}]" class="form-control {{ isset($post_item) ? 'tinymce' : 'unloaded-tinymce' }}">{{ $post_item?->{"paragraph_text_$key"} }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
