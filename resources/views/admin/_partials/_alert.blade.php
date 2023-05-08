@if( session('icon') && session('title') && session('message') )
    <div id="alert"
         data-title="{{ session('title') }}"
         data-icon="{{ session('icon') }}"
         data-message="{{ session('message') }}"></div>
@endif
