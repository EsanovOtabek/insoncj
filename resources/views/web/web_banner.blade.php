<div class="banner-search py-4">
    <div class="container">
        <div class="row flex-lg-row-reverse align-items-center">
            <div class="col-12 col-lg-6">
                <img src="{{ asset('assets/img/banner.png') }}" class="img-fluid" alt="#" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold lh-1 mb-3 text-body">{{ __('home.journal_name') }}.</h1>
                <p class="lead fw-normal text-dark mb-0">{{ __('home.s_journal') }}
                </p>
                <hr>
                <div class="d-inline">
                    <a href="{{ route('login') }}" class="btn btn-outline-primary">{{ __('home.login') }}</a>
                    <a href="{{ route('register') }}" class="btn btn-primary">{{ __('home.register') }}</a>
                </div>

            </div>
        </div>
    </div>
</div>
