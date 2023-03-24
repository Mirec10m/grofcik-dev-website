<div class="tab-content custom-tab-content mb-4">
    <div class="tab-pane p-3 active" id="info" role="tabpanel">
        <div class="row mb-4">
            <div class="col-sm-6">
                <h5 class="card-title mb-0">{{ $card_title }} - Všeobecné</h5>
            </div>

            <div class="col-sm-6 text-right">
                <a href="{{ route('post-tags.index') }}" class="btn btn-primary waves-effect waves-light float-end">
                    <i class="mdi mdi-format-list-bulleted pe-2"></i> Zoznam tagov
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-9">
                @include('admin._partials._lang_tabs', [ 'inputs' => ['name', 'slug'] ])

                <div class="tab-content mb-4">
                    @foreach(config('settings.languages') as $key => $lang)
                        <div class="tab-pane p-3 {{ $loop->first ? 'active' : '' }}" id="{{ $key }}" role="tabpanel">
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label class="form-label">
                                        Názov <span class="text-uppercase">{{ $key }}</span> <span class="text-danger">*</span>
                                    </label>
                                    <input name="name_{{ $key }}" type="text" value="{{ old("name_$key", isset($post_tag) ? $post_tag->{"name_$key"} : '') }}" class="form-control {{ $errors->has("name_$key") ? 'is-invalid' : '' }}">
                                    @include('admin._partials._errors', ['column' => "name_$key"])
                                </div>

                                <div class="col-sm-6">
                                    <label class="form-label">
                                        Slug <span class="text-uppercase">{{ $key }}</span> <span class="text-danger">*</span>
                                    </label>
                                    <input name="slug_{{ $key }}" type="text" value="{{ old("slug_$key", isset($post_tag) ? $post_tag->{"slug_$key"} : '') }}" class="form-control {{ $errors->has("slug_$key") ? 'is-invalid' : '' }}">
                                    @include('admin._partials._errors', ['column' => "slug_$key"])
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
