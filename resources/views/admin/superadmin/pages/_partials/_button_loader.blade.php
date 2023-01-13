<div class="row mb-3">
    <div class="col-sm-12 col-md-9">

        <h6 class="card-subtitle fw-bold mb-1">Button inside form</h6>
        <p>
            If you use <code>type="submit"</code> on button inside of form, it will automatically switch to loader when form is submitted.
        </p>
        <div class="row mb-3">
            <div class="col-sm-12">

                <div class="d-inline-block">
                    <form action="#" method="get">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Primary</button>
                    </form>
                </div>

                <div class="d-inline-block">
                    <form action="#" method="get">
                        <button type="submit" class="btn btn-secondary waves-effect waves-light">Secondary</button>
                    </form>
                </div>

            </div>
        </div>

        <hr>

        <h6 class="card-subtitle fw-bold mb-1">Button outside form (reference)</h6>
        <p>
            If you use <code>type="submit"</code> on button outside of form (using <code>form="form_id"</code>), it will also automatically switch to loader when form is submitted.
        </p>
        <div class="row mb-3">
            <div class="col-sm-12">

                <div class="d-inline-block">
                    <form id="form1" action="#" method="get"></form>

                    <button type="submit" form="form1" class="btn btn-success waves-effect waves-light">Success</button>
                </div>

                <div class="d-inline-block">
                    <form id="form2" action="#" method="get"></form>

                    <button type="submit" form="form2" class="btn btn-info waves-effect waves-light">Info</button>
                </div>

            </div>
        </div>

        <hr>

        <h6 class="card-subtitle fw-bold mb-1">Non-submit buttons</h6>
        <p>
            If you are not using <code>type="submit"</code> on button and you want to use the loader when user clicks on button, you can add class <code>button-loader</code> to the button.
        </p>
        <div class="row mb-3">
            <div class="col-sm-12">

                <div class="d-inline-block">
                    <button type="button" form="form1" class="btn btn-warning waves-effect waves-light button-loader">Warning</button>
                </div>

                <div class="d-inline-block">
                    <button type="button" form="form2" class="btn btn-danger waves-effect waves-light button-loader">Danger</button>
                </div>

            </div>
        </div>

        <hr>

        <h6 class="card-subtitle fw-bold mb-1">Programmatic switch to loading</h6>
        <p>
            If you wish to make button show loader at specific event, you can just add class <code>button-loading</code> to the button and disable it.
        </p>
        <div class="row mb-3">
            <div class="col-sm-12">

                <div class="d-inline-block">
                    <button type="button" form="form1" class="btn btn-dark waves-effect waves-light button-loading" disabled>Dark</button>
                </div>

            </div>
        </div>

    </div>
</div>
