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
                        <div class="col-sm-6">
                            <label class="form-label">
                                Názov <span class="text-uppercase">{{ $key }}</span> <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <input disabled name="items[{{ $index ?? '' }}][image_name_{{ $key }}]" type="text" value="{{ $post_item?->{"image_name_$key"} ?? '' }}" class="form-control {{ ( $with_errors ?? false ) && $errors->has("items.$index.image_name_$key") ? 'is-invalid' : '' }}">
                                <span class="input-group-text" id="basic-addon1">.webp</span>
                            </div>
                            @if( $with_errors ?? false )
                                @include('admin._partials._errors', ['column' => "items.$index.image_name_$key"])
                            @endif
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label">
                                Alternatívny text <span class="text-uppercase">{{ $key }}</span> <span class="text-danger">*</span>
                            </label>
                            <input disabled name="items[{{ $index ?? '' }}][image_alt_{{ $key }}]" type="text" value="{{ $post_item?->{"image_alt_$key"} ?? '' }}" class="form-control {{ ( $with_errors ?? false ) && $errors->has("items.$index.image_alt_$key") ? 'is-invalid' : '' }}">
                            @if( $with_errors ?? false )
                                @include('admin._partials._errors', ['column' => "items.$index.image_alt_$key"])
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="form-label">
                                Krátky popis <span class="text-uppercase">{{ $key }}</span> (max. 255 znakov) <span class="text-danger">*</span>
                            </label>
                            <textarea disabled name="items[{{ $index ?? '' }}][image_description_{{ $key }}]" class="form-control {{ ( $with_errors ?? false ) && $errors->has("items.$index.image_description_$key") ? 'is-invalid' : '' }}">{{ $post_item?->{"image_description_$key"} ?? '' }}</textarea>
                            @if( $with_errors ?? false )
                                @include('admin._partials._errors', ['column' => "items.$index.image_description_$key"])
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row mb-3">
            <div class="col-sm-6">
                <div>
                    <label class="form-label">
                        Obrázok <span class="text-danger">*</span>
                    </label>
                    <input disabled name="items[{{ $index ?? '' }}][image_file]" class="form-control {{ ( $with_errors ?? false ) && $errors->has("items.$index.image_file") ? 'is-invalid' : '' }} {{ isset($post_item) ? 'filestyle' : 'unloaded-filestyle' }}" type="file" data-text="Vybrať súbor" data-btnClass="btn-primary border-left-no-radius">
                    @if( $with_errors ?? false )
                        @include('admin._partials._errors', ['column' => "items.$index.image_file"])
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
