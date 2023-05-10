<div class="modal fade cookies-modal" id="cookies-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header p-0">
                <ul class="nav cookies-nav w-100" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#consent" role="tab" aria-controls="home" aria-selected="true">
                            {{ trans('demibox.cookies.modal-consent') }}
                        </a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="about-tab" data-bs-toggle="tab" href="#about-tab-content" role="tab" aria-controls="about" aria-selected="false">
                            {{ trans('demibox.cookies.modal-about') }}
                        </a>
                    </li>
                </ul>
            </div>

            <div class="modal-body px-0 pb-0">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="consent" role="tabpanel" aria-labelledby="home-tab">
                        <div class="container">
                            <div class="row mb-3 px-3">
                                <div class="col-lg-12">
                                    <div class="h4 fw-bold">
                                        {{ trans('demibox.cookies.modal-consent-heading') }}
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3 px-3">
                                <div class="col-lg-12">
                                    <p>
                                        {{ trans('demibox.cookies.modal-consent-text') }}
                                    </p>
                                </div>
                            </div>
                            <div class="row border-top">
                                <div class="col-lg-4 py-3 border-end text-center">
                                    <label>{{ trans('demibox.cookies.modal-consent-switch-necessary') }}</label>
                                    <div class="form-check form-switch p-0">
                                        <input type="hidden" value="0">
                                        <input type="checkbox" class="form-check-input cookies-switch" role="switch" id="cookies_necessary" value="1" checked disabled>
                                        <label class="form-check-label" for="cookies_necessary"></label>
                                    </div>
                                </div>

                                <div class="col-lg-4 py-3 border-end text-center">
                                    <label>{{ trans('demibox.cookies.modal-consent-switch-analytical') }}</label>
                                    <div class="form-check form-switch p-0">
                                        <input type="hidden" value="0">
                                        <input type="checkbox" class="form-check-input cookies-switch" role="switch" id="cookies_analytical" value="1" {{ session('cookies_analytical', 1) === 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="cookies_analytical"></label>
                                    </div>
                                </div>

                                <div class="col-lg-4 py-3 text-center">
                                    <label>{{ trans('demibox.cookies.modal-consent-switch-marketing') }}</label>
                                    <div class="form-check form-switch p-0">
                                        <input type="hidden" value="0">
                                        <input type="checkbox" class="form-check-input cookies-switch" role="switch" id="cookies_marketing" value="1" {{ session('cookies_marketing', 1) === 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="cookies_marketing"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="about-tab-content" role="tabpanel" aria-labelledby="about-tab">
                        <div class="container">
                            <div class="row px-3 mb-3">
                                <div class="col-lg-12">
                                    <p>
                                        {{ trans('demibox.cookies.modal-about-text-1') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button form="cookies-form" type="button" class="cookies-button" data-cookies-action="save"
                        data-text-save="{{ trans('demibox.cookies.modal-btn-save') }}"
                        data-text-refuse="{{ trans('demibox.cookies.modal-btn-refuse') }}">
                </button>

                <button type="button" class="cookies-button cookies-accept" data-cookies-action="accept-all">
                    {{ trans('demibox.cookies.modal-btn-accept') }}
                </button>
            </div>
        </div>
    </div>
</div>
