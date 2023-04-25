<div class="py-5 footer">
    <div>
        <div class="container py-3">
            <div class="row">
                <div class="col-6 col-lg-2 col-md-3">
                    <h6 class="mb-3 text-body fw-bold">{{ __('home.menus') }}</h6>
                    <a class="py-1 text-decoration-none d-block w-100 text-muted" href="{{ route('index') }}">Bosh sahifa</a>
                    <a class="py-1 text-decoration-none d-block w-100 text-muted" href="{{ route('about') }}">Jurnal haqida</a>
                    <a class="py-1 text-decoration-none d-block w-100 text-muted" href="{{ route('news') }}">E'lonlar</a>
                    <a class="py-1 text-decoration-none d-block w-100 text-muted" href="{{ route('archive') }}">Arxiv</a>
                    <a class="py-1 text-decoration-none d-block w-100 text-muted" href="{{ route('experts') }}">Tahririyat a'zolari</a>
                </div>
                <div class="col-6 col-lg-2 col-md-3">
                    <h6 class="mb-3 text-body fw-bold">{{ __('home.auth') }}</h6>
                    <a class="py-1 text-decoration-none d-block w-100 text-muted" href="{{ route('login') }}">Kirish</a>
                    <a class="py-1 text-decoration-none d-block w-100 text-muted" href="{{ route('register') }}">Ro'yxatdan o'tish</a>
                </div>
                <div class="col-6 col-lg-2 col-md-3">
                    <h6 class="mb-3 text-body fw-bold">{{ __('home.contact') }}</h6>
                    <a class="py-1 text-decoration-none d-block w-100 text-muted" href="tel:">932360433</a>
                    <a class="py-1 text-decoration-none d-block w-100 text-muted" href="tel:">932360433</a>
                    <a class="py-1 text-decoration-none d-block w-100 text-muted" href="tel:">932360433</a>
                </div>
                <div class="col-6 col-lg-4 col-md-3 ps-lg-5">
                    <a href="{{ route('index') }}" class="brand d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
                        <img src="{{ asset('assets/img/'. __('home.logo')) }}" class="img-fluid" alt="InfonCJ">
                    </a>
                    <br>
                    <p>{{ __('home.phone') }}: <a class="py-1 text-decoration-none d-inline w-100 text-muted" href="tel:">932360433</a>.</p>
                    <p>{{ __('home.email') }}: <a class="py-1 text-decoration-none d-inline w-100 text-muted" href="email:">hello@lifepc.uz</a>.</p>
                    <p>{{ __('home.adress') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-4 bg-white footer-copyright">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <span class="me-3 small">©2023 <b class="text-primary">Esanov</b>. All rights reserved</span>
                <a class="text-black-50 small mx-3 text-decoration-none" href="{{ route('login') }}">{{ __('home.login') }}</a>
                <a class="text-black-50 small mx-3 text-decoration-none" href="{{ route('register') }}">{{ __('home.register') }}</a>
            </div>
            <div class="col-md-4 text-end">
                <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i class="icofont-facebook"></i></a>
                <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i class="icofont-telegram"></i></a>
                <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i class="icofont-linkedin"></i></a>
                <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i class="icofont-youtube-play"></i></a>
                <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i class="icofont-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
