<div class="feature-list py-5 border-bottom bg-white">
    <div class="container py-4">
        <heading>
            <h3 class="text-center pb-4 mb-4 fw-bold text-black">{{ __('home.doc_title') }}</h3>
        </heading>
        <div class="row">
            <div class="col-md-6 border-end">
                <img class="img-fluid p-2" src="http://axborotnoma.uz/static/images/right-image.png" alt="">
            </div>
            <div class="col-md-6 row">
                <div class="col-md-12 gap-4 d-flex">
                    <div><i class="bi bi-person-bounding-box text-muted display-6"></i></div>
                    <div>
                        <h5 class="card-title fw-bold text-black">1. {{ __('home.doc_1') }}</h5>
                        <p class="fs-14 mb-4">{{ __('home.doc_1val') }} <a href="{{ route('register') }}">{{ __('home.register') }}</a> </p>
                    </div>
                </div>
                <div class="col-md-12 gap-4 d-flex">
                    <div><i class="bi bi-file-earmark-medical-fill text-muted display-6"></i></div>
                    <div>
                        <h5 class="card-title fw-bold text-black">2. {{ __('home.doc_2') }}</h5>
                        <p class="fs-14 mb-4">{{ __('home.doc_2val') }} </p>
                    </div>
                </div>
                <div class="col-md-12 gap-4 d-flex">
                    <div><i class="bi bi-check-circle-fill text-muted display-6"></i></div>
                    <div>
                        <h5 class="card-title fw-bold text-black">3. {{ __('home.doc_3') }} </h5>
                        <p class="fs-14 mb-4"> {{ __('home.doc_3val') }}  </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
