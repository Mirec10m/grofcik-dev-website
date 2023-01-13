<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">{{ $title }}</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    @foreach($crumbs as $crumb => $redirect)
                        <li class="breadcrumb-item"><a href="{{ $redirect ?? 'javascript:void(0);' }}">{{ $crumb }}</a></li>
                    @endforeach
                    <li class="breadcrumb-item active">{{ $title }}</li>
                </ol>
            </div>

        </div>
    </div>
</div>
