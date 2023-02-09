<div id="cookies-bar" class="cookies-bar {{ session('cookies_dismissed') === 1 ? 'd-none' : '' }}" data-url="{{ route('cookies.submit') }}">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 cookies-bar-text">
                {{ trans('demibox.cookies.bar-text') }}
            </div>

            <div class="col-xs-12 col-md-4 d-flex">
                <button type="button" data-cookies-action="refuse-all" class="cookies-button">
                    {{ trans('demibox.cookies.bar-btn-refuse') }}
                </button>

                <button type="button" data-bs-toggle="modal" data-bs-target="#cookies-modal" class="cookies-button">
                    {{ trans('demibox.cookies.bar-btn-settings') }}
                </button>

                <button type="button" data-cookies-action="accept-all" class="cookies-button cookies-accept">
                    {{ trans('demibox.cookies.bar-btn-accept') }}
                </button>
            </div>
        </div>
    </div>
</div>
