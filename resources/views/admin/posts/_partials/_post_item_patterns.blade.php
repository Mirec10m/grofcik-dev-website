<div id="post-item-patterns" data-langs="{{ json_encode(array_keys(config('settings.languages'))) }}" style="display: none;">

    <div id="pattern-post-block">
        @include('admin.posts._partials._patterns._post_block_pattern', [ 'post_item' => null ])
    </div>

    <div id="pattern-paragraph">
        @include('admin.posts._partials._patterns._paragraph_pattern', [ 'post_item' => null ])
    </div>

    <div id="pattern-image">
        @include('admin.posts._partials._patterns._image_pattern', [ 'post_item' => null ])
    </div>

</div>
