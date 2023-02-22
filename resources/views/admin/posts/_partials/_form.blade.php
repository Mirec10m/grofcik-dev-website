<div class="tab-content custom-tab-content mb-4">
    <div class="tab-pane p-3 active" id="info" role="tabpanel">
        <div class="row mb-4">
            <div class="col-sm-6">
                <h5 class="card-title mb-0">{{ $card_title }} - Všeobecné</h5>
            </div>

            <div class="col-sm-6 text-right">
                <a href="{{ route('posts.index') }}" class="btn btn-primary waves-effect waves-light float-end">
                    <i class="mdi mdi-format-list-bulleted pe-2"></i> Zoznam článkov
                </a>
            </div>
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
                                    <input name="name_{{ $key }}" type="text" value="{{ old("name_$key", isset($post) ? $post->{"name_$key"} : '') }}" class="form-control {{ $errors->has("name_$key") ? 'is-invalid' : '' }}">
                                    @include('admin._partials._errors', ['column' => "name_$key"])
                                </div>

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
                                <div class="col-sm-6">
                                    <label class="form-label">
                                        Slug <span class="text-uppercase">{{ $key }}</span> <span class="text-danger">*</span>
                                    </label>
                                    <input name="slug_{{ $key }}" type="text" value="{{ old("slug_$key", isset($post) ? $post->{"slug_$key"} : '') }}" class="form-control {{ $errors->has("slug_$key") ? 'is-invalid' : '' }}">
                                    @include('admin._partials._errors', ['column' => "slug_$key"])
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

            <div class="col-sm-6 text-right">
                <a href="{{ route('posts.index') }}" class="btn btn-primary waves-effect waves-light float-end">
                    <i class="mdi mdi-format-list-bulleted pe-2"></i> Zoznam článkov
                </a>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-sm-6">
                <div class="dropdown d-inline-block">
                    <button class="btn btn-soft-dark btn-sm dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pridať blok
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
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
            </div>
        </div>

        <style>
            .post-block {
                border-radius: inherit;
                border-top-width: 1px !important;
                border-bottom-width: 1px;
                display: flex;
                padding: 0;
                min-height: 100px;
            }
            .post-block-info {
                padding: 10px;
                margin-right: auto;
            }
            .post-block-name {
                display: inline-block;
            }
            .post-block-description {
                font-size: 11px;
                margin-top: 10px;
            }
            .post-block-actions {
                padding: 10px;
                border-left: 1px solid rgba(64,81,137,.2);
                display: flex;
                flex-direction: column;
            }
            .post-block-actions i:not(:last-child) {
                margin-bottom: 5px;
            }

            .post-item-content {
                display: none;
            }
            .post-item-content.active {
                display: block;
            }
        </style>

        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="list-group col nested-list nested-sortable post-blocks" data-items="0">

                        </div>
                    </div>

                    <div class="col-sm-9">
                        <div class="post-items-content">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane p-3" id="image" data-show-image="true" role="tabpanel">
        <div class="row mb-4">
            <div class="col-sm-6">
                <h5 class="card-title mb-0">{{ $card_title }} - Obrázok</h5>
            </div>

            <div class="col-sm-6 text-right">
                <a href="{{ route('posts.index') }}" class="btn btn-primary waves-effect waves-light float-end">
                    <i class="mdi mdi-format-list-bulleted pe-2"></i> Zoznam článkov
                </a>
            </div>
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

    @if( config('demibox.blog.categories') || config('demibox.blog.tags') )
        <div class="tab-pane p-3" id="other" role="tabpanel">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h5 class="card-title mb-0">{{ $card_title }} - Ostatné</h5>
                </div>

                <div class="col-sm-6 text-right">
                    <a href="{{ route('posts.index') }}" class="btn btn-primary waves-effect waves-light float-end">
                        <i class="mdi mdi-format-list-bulleted pe-2"></i> Zoznam článkov
                    </a>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 col-md-9">
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
                                    Značky <span class="text-danger">*</span>
                                </label>
                                <select name="tags[]" class="form-control js-example-basic-multiple {{ $errors->has('tags') ? 'is-invalid' : '' }}" multiple>
                                    <option value="">Vyberte značky</option>
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
                </div>
            </div>
        </div>
    @endif
</div>
