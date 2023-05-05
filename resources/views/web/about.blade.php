@extends('base.web')

@section('title',  __('home.about'))
@section('description', __('home.journal_name'))
@section('og_image', '')

@section('body')
    <!-- Content -->
    <div class="py-3">
        <div class="container">
            <nav>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('index') }}">
                            <i class="bi bi-house"></i> {{ __('home.home') }}
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('home.about') }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <hr class="m-0">
    <!-- Head -->
    <header class="py-5">
        <div class="container px-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center my-5">
                        <h1 class="display-4 fw-bold text-body mb-3">{{ __('about.about') }}</h1>
                        <p class="lead fw-normal text-dark mb-4">
                            {{ __('about.about_title') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About section one-->
    <section class="py-5 bg-white" id="scroll-target">
        <div class="container my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-4"><img class="img-fluid w-75 rounded-3 mb-5 mb-lg-0" src="{{ asset('images/site/journal.png') }}" alt="..." /></div>
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-3 text-body">{{ __('about.about_1') }}</h2>
                    <p class="lead fw-normal text-muted mb-0">
                        {{ __('about.about_1c') }}
                        <br>
                        {{ __('about.about_1c1') }}
                        <br>
                        {{ __('about.about_1c2') }}
                        <br>
                        {{ __('about.about_1c3') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <hr class="m-0">
    <!-- About section two-->
    <section class="py-5 bg-light">
        <div class="container my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-4 order-first order-lg-last"><img class="img-fluid rounded-3 mb-5 mb-lg-0" src="{{ asset('images/site/guvohnoma.jpg') }}" alt="..." /></div>
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-3 text-body">{{ __('about.about_2') }}</h2>
                    <p class="lead fw-normal text-muted mb-0">
                        {{ __('about.about_2c') }}
                        <br>
                        {{ __('about.about_2c1') }}
                        <br>
                        {{ __('about.about_2c2') }}
                        <br>
                        {{ __('about.about_2c3') }}
                        <br>
                        {{ __('about.about_2c4') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('web.web_requirements')

@endsection

@push('page_js')
    <script>
        $('#more_btn').click(function (){

            $('#more_btn').addClass('d-none');
            $('#less_btn').removeClass('d-none');
            $('.reqd-none').removeClass('d-none');
        });

        $('#less_btn').click(function (){

            $('#more_btn').removeClass('d-none');
            $('#less_btn').addClass('d-none');
            $('.reqd-none').addClass('d-none');
        });
    </script>

@endpush


