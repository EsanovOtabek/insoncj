@extends('base.web')

@section('title', __('home.ads'))
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
                    <li class="breadcrumb-item active" aria-current="page">{{ __('home.ads') }}</li>
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
                        <h1 class="display-4 fw-bold text-body mb-3">{{ __('about.journal_ads') }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="bg-light py-5 border-bottom">
        <div class="container py-4">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach($news as $n)
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item">
                            <img src="{{ asset('images/' . $n->image) }}">
                            <div class="card-body">
                                <h6 class="card-title pb-3 fw-bold text-black mb-0">
                                    <span class="bg-primary badge text-white me-2">NEW</span>
                                    {{ $n->{'title_'.app()->getLocale()} }}
                                </h6>
                                <div class="card-text text-muted small">
                                    {{ Str::of($n->{'text_'.app()->getLocale()})->words(20, ' ...') }}
                                </div>
                                <div class="text-muted gap-2 pt-2 small d-flex">
                                    <span><i class="bi bi-calendar"></i> {{ $n->date }}</span>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-white border-top p-3">
                                <div class="d-grid">
                                    <a href="{{ route('newsShow',$n->id) }}" class="btn btn-primary btn-lg">
                                        <i class="bi bi-eye"></i> {{ __('home.more') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>




@endsection
