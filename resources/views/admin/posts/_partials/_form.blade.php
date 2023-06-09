<div class="tab-content custom-tab-content mb-4">
    <div class="tab-pane p-3 active" id="info" role="tabpanel">
        <div class="row mb-4">
            <div class="col-sm-6">
                <h5 class="card-title mb-0">{{ $card_title }} - Všeobecné</h5>
            </div>

            @include('admin.posts._partials._form_buttons')
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-9">
                @include('admin._partials._lang_tabs', [ 'inputs' => ['name', 'published', 'slug', 'short'] ])

                <div class="tab-content mb-4">
                    @foreach(config('settings.languages') as $key => $lang)
                        <div class="tab-pane p-3 {{ $loop->first ? 'active' : '' }}" id="{{ $key }}" role="tabpanel">
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label class="form-label">
                                        Názov <span class="text-uppercase">{{ $key }}</span> <span class="text-danger">*</span>
                                    </label>
                                    <input name="name_{{ $key }}" type="text" value="{{ old("name_$key", isset($post) ? $post->{"name_$key"} : '') }}" class="form-control parse-slug {{ $errors->has("name_$key") ? 'is-invalid' : '' }}" data-slug-selector='input[name="slug_{{ $key }}"]'>
                                    @include('admin._partials._errors', ['column' => "name_$key"])
                                </div>

                                <div class="col-sm-6">
                                    <label class="form-label">
                                        Slug <span class="text-uppercase">{{ $key }}</span> <span class="text-danger">*</span>
                                    </label>
                                    <input name="slug_{{ $key }}" type="text" value="{{ old("slug_$key", isset($post) ? $post->{"slug_$key"} : '') }}" class="form-control {{ $errors->has("slug_$key") ? 'is-invalid' : '' }}">
                                    @include('admin._partials._errors', ['column' => "slug_$key"])
                                </div>
                            </div>

                            @if( config('demibox.blog.categories') || config('demibox.blog.tags') )
                                <div class="row mb-3">
                                    @if( config('demibox.blog.categories') )
                                        <div class="col-sm-6">
                                            <label class="form-label">
                                                Kategória <span class="text-danger">*</span>
                                            </label>
                                            <select name="post_category_id" class="form-control js-example-basic-single {{ $errors->has('post_category_id') ? 'is-invalid' : '' }}">
                                                <option value="">Vyberte kategóriu</option>
                                                @foreach($post_categories as $post_category)
                                                    <option value="{{ $post_category->id }}" {{ old('post_category_id') == $post_category->id ? 'selected' : (isset($post) && $post->post_category_id == $post_category->id ? 'selected' : '') }}>
                                                        {{ $post_category->name_sk }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @include('admin._partials._errors', ['column' => 'post_category_id'])
                                        </div>
                                    @endif

                                    @if( config('demibox.blog.tags') )
                                        <div class="col-sm-6">
                                            <label class="form-label">
                                                Tagy <span class="text-danger">*</span>
                                            </label>
                                            <select name="tags[]" class="form-control js-example-basic-multiple {{ $errors->has('tags') ? 'is-invalid' : '' }}" multiple>
                                                @foreach($post_tags as $post_tag)
                                                    <option value="{{ $post_tag->id }}" {{ in_array($post_tag->id, old('tags', [])) ? 'selected' : (isset($post) && $post->tags->contains('id', $post_tag->id) ? 'selected' : '') }}>
                                                        {{ $post_tag->name_sk }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @include('admin._partials._errors', ['column' => 'tags'])
                                            @include('admin._partials._errors', ['column' => 'tags.*'])
                                        </div>
                                    @endif
                                </div>
                            @endif

                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label class="form-label">
                                        Zobraziť <span class="text-uppercase">{{ $key }}</span>
                                    </label>
                                    <div class="form-check form-switch form-switch-info form-switch-lg" dir="ltr">
                                        <input name="published_{{ $key }}" type="hidden" value="0">
                                        <input name="published_{{ $key }}" type="checkbox" class="form-check-input {{ $errors->has("published_$key") ? 'is-invalid' : '' }}" value="1" {{ old("published_$key") == 1 ? 'checked' : (isset($post) && $post->{"published_$key"} ? 'checked' : '') }}>
                                    </div>
                                    @include('admin._partials._errors', ['column' => "published_$key"])
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <label class="form-label">
                                        Krátky popis <span class="text-uppercase">{{ $key }}</span> (max. 255 znakov) <span class="text-danger">*</span>
                                    </label>
                                    <textarea name="short_{{ $key }}" class="form-control {{ $errors->has("short_$key") ? 'is-invalid' : '' }}">{{ old("short_$key", isset($post) ? $post->{"short_$key"} : '') }}</textarea>
                                    @include('admin._partials._errors', ['column' => "short_$key"])
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane p-3" id="content" role="tabpanel">
        <div class="row mb-4">
            <div class="col-sm-6">
                <h5 class="card-title mb-0">{{ $card_title }} - Obsah</h5>
            </div>

            @include('admin.posts._partials._form_buttons')
        </div>

        <div class="row mb-4">
            <div class="col-sm-6">
                <div class="dropdown d-inline-block">
                    <button class="btn btn-soft-dark btn-sm dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pridať blok
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item post-blocks-add" data-type="paragraph">
                                <i class="mdi mdi-lead-pencil action-icon"></i> Paragraf
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item post-blocks-add" data-type="image">
                                <i class="mdi mdi-image-multiple-outline action-icon"></i> Obrázok
                            </a>
                        </li>
                    </ul>
                </div>

                @include('admin._partials._errors', ['column' => "items"])
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="list-group col nested-list nested-sortable post-blocks" data-items="{{ old('items') ? sizeof(old('items')) : ( isset($post) ? $post->items->count() : 0 ) }}">
                            @if( old('items') )
                                @foreach(old('items') as $key => $post_item)
                                    @include('admin.posts._partials._patterns._post_block_pattern', [ 'post_item' => (object) $post_item, 'index' => $loop->iteration, 'with_errors' => true ])
                                @endforeach
                            @elseif( isset($post) )
                                @foreach($post->items->sortBy('order') as $post_item)
                                    @include('admin.posts._partials._patterns._post_block_pattern', [ 'post_item' => $post_item, 'index' => $loop->iteration ])
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <div class="post-items-content">
                            @if( old('items') )
                                @foreach(old('items') as $key => $post_item)
                                    @include("admin.posts._partials._patterns._{$post_item['type']}_pattern", [ 'post_item' => (object) $post_item, 'index' => $loop->iteration, 'with_errors' => true ])
                                @endforeach
                            @elseif( isset($post) )
                                @foreach($post->items->sortBy('order') as $post_item)
                                    @include("admin.posts._partials._patterns._{$post_item->type}_pattern", [ 'post_item' => $post_item, 'index' => $loop->iteration ])
                                @endforeach
                            @endif
                        </div>
                    </div>

                    @include('admin.posts._partials._post_item_patterns')
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane p-3" id="image" data-show-image="true" role="tabpanel">
        <div class="row mb-4">
            <div class="col-sm-6">
                <h5 class="card-title mb-0">{{ $card_title }} - Obrázok</h5>
            </div>

            @include('admin.posts._partials._form_buttons')
        </div>

        @include('admin._partials._lang_tabs', [ 'inputs' => ['name', 'published', 'slug', 'short'], 'key_append' => '_profile' ])

        <div class="tab-content mb-4">
            @foreach( config('settings.languages') as $key => $lang )
                <div class="tab-pane p-3 {{ $loop->first ? 'active' : '' }}" id="{{ $key }}_profile" role="tabpanel">
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <label class="form-label">
                                Názov <span class="text-uppercase">{{ $key }}</span> <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <input name="profile_name_{{ $key }}" type="text" value="{{ old("profile_name_$key", isset($post) ? $post->{"profile_name_$key"} : '') }}" class="form-control {{ $errors->has("profile_name_$key") ? 'is-invalid' : '' }}">
                                <span class="input-group-text" id="basic-addon1">.webp</span>
                            </div>
                            @include('admin._partials._errors', ['column' => "profile_name_$key"])
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label">
                                Alternatívny text <span class="text-uppercase">{{ $key }}</span> <span class="text-danger">*</span>
                            </label>
                            <input name="profile_alt_{{ $key }}" type="text" value="{{ old("profile_alt_$key", isset($post) ? $post->{"profile_alt_$key"} : '') }}" class="form-control {{ $errors->has("profile_alt_$key") ? 'is-invalid' : '' }}">
                            @include('admin._partials._errors', ['column' => "profile_alt_$key"])
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="form-label">
                                Krátky popis <span class="text-uppercase">{{ $key }}</span> (max. 255 znakov) <span class="text-danger">*</span>
                            </label>
                            <textarea name="profile_description_{{ $key }}" class="form-control {{ $errors->has("profile_description_$key") ? 'is-invalid' : '' }}">{{ old("profile_description_$key", isset($post) ? $post->{"profile_description_$key"} : '') }}</textarea>
                            @include('admin._partials._errors', ['column' => "profile_description_$key"])
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row mb-3">
            <div class="col-sm-12 col-md-9">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <div>
                            <label class="form-label">
                                Profilový obrázok <span class="text-danger">*</span>
                            </label>
                            <input name="profile" class="form-control filestyle {{ $errors->has('profile') ? 'is-invalid' : '' }}" type="file" data-text="Vybrať súbor" data-btnClass="btn-primary border-left-no-radius">
                            @include('admin._partials._errors', ['column' => 'profile'])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane p-3" id="seo" data-show-image="true" role="tabpanel">
        <div class="row mb-4">
            <div class="col-sm-6">
                <h5 class="card-title mb-0">{{ $card_title }} - SEO</h5>
            </div>

            @include('admin.posts._partials._form_buttons')
        </div>

        @include('admin._partials._lang_tabs', [ 'inputs' => ['name', 'published', 'slug', 'short'], 'key_append' => '_profile' ])

        <div class="tab-content mb-4">
            @foreach( config('settings.languages') as $key => $lang )
                <div class="tab-pane p-3 {{ $loop->first ? 'active' : '' }}" id="{{ $key }}_profile" role="tabpanel">
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <label class="form-label">
                                Názov <span class="text-uppercase">{{ $key }}</span> <span class="text-danger">*</span>
                            </label>
                            <input name="seo[title_{{ $key }}]" type="text" value="{{ old("seo.title_$key", isset($post) && $post->seo ? $post->seo->{"title_$key"} : '') }}" class="form-control {{ $errors->has("seo.title_$key") ? 'is-invalid' : '' }}">
                            @include('admin._partials._errors', ['column' => "seo.title_$key"])
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="form-label">
                                Kanonická url <span class="text-uppercase">{{ $key }}</span> <span class="text-danger">*</span>
                            </label>
                            <input name="seo[canonical_{{ $key }}]" type="text" value="{{ old("seo.canonical_$key", isset($post) && $post->seo ? $post->seo->{"canonical_$key"} : '') }}" class="form-control {{ $errors->has("seo.canonical_$key") ? 'is-invalid' : '' }}">
                            @include('admin._partials._errors', ['column' => "seo.canonical_$key"])
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="form-label">
                                Popis <span class="text-uppercase">{{ $key }}</span> (max. 255 znakov) <span class="text-danger">*</span>
                            </label>
                            <textarea name="seo[description_{{ $key }}]" class="form-control {{ $errors->has("seo.description_$key") ? 'is-invalid' : '' }}">{{ old("seo.description_$key", isset($post) && $post->seo ? $post->seo->{"description_$key"} : '') }}</textarea>
                            @include('admin._partials._errors', ['column' => "seo.description_$key"])
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row mb-3">
            <div class="col-sm-12 col-md-9">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <div>
                            <label class="form-label">
                                Obrázok <span class="text-danger">*</span>
                            </label>
                            <input name="seo[image]" class="form-control filestyle {{ $errors->has('seo.image') ? 'is-invalid' : '' }}" type="file" data-text="Vybrať súbor" data-btnClass="btn-primary border-left-no-radius">
                            @include('admin._partials._errors', ['column' => 'seo.image'])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
