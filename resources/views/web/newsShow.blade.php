@extends('base.web')

@section('title', $news->{'title_'.app()->getLocale()})
@section('description', __('home.journal_name') . " - ". $news->{'title_'.app()->getLocale()})
@section('og_image', asset('images/'.$news->image))

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
                    <li class="breadcrumb-item" aria-current="page">{{ __('home.ads') }}</li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $news->{'title_'.app()->getLocale()} }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <hr class="m-0">
    <div class="py-5">
        <div class="container">
            <div>
                <h2 class="text-black fw-bold">{{ $news->{'title_'.app()->getLocale()} }}</h2>
            </div>
            <small class="bg-light pt-3 gap-2 d-block d-md-flex">
                <div><span class="badge bg-danger pills text-white">NEWS</span></div>
                <div class="gap-1"><i class="bi bi-calendar"></i>  {{ $news->date }}</div>
            </small>
            <div class="pt-5">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="gap-2">
                            <div class="col mb-5">
                                <div class="card border-0 shadow-sm overflow-hidden rounded-3">
                                    <img src="{{ asset('images/' . $news->image) }}" class="img-fluid rounded-3">
                                    <div class="card-body">
                                        <div class="float-end gap-3 d-flex">
                                            <div class="gap-2">
                                                <a class="text-muted"
                                                   href="https://t.me/share/url?url=http://insoncj.eo/news/{{ $news->id }}&text={{ $news->{'title_'.app()->getLocale()} }}" target="_blank">
                                                    <i class="bi bi-share"></i>
                                                    <span>{{ __('home.share') }}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h5 class="mb-4 text-dark">{{ $news->{'title_'.app()->getLocale()} }}</h5>
                                <p>
                                    {{ $news->{'text_'.app()->getLocale()} }}
                                </p>
                            </div>


                            <hr class="m-0">
                        </div>
                    </div>

                    <div class="col-lg-4 d-none d-md-block">
                        <div class="sidebar-fixed">
                            <div class="card border-0 bg-white rounded-3 shadow-sm overflow-hidden mb-3 p-3">
                                <div class="card-body p-4">
                                    <div class="small text-muted fw-bolder fs-6">
                                        <a href="#"> <span class="badge bg-danger">{{ __('home.last_ads') }}</span></a>
                                    </div>

                                    <hr>
                                    <div class="card mb-3 border-0 w-100 rounded-3 shadow-sm overflow-hidden">
                                        <div class="row g-0">
                                            @foreach($latest6 as $n)
                                                <div class="col-4">
                                                    <a href="{{ route('newsShow', $news->id) }}">
                                                        <img src="{{ asset('images/' . $n->image) }}" class="img-fluid h-100" style="object-fit: cover;" alt="...">
                                                    </a>
                                                </div>
                                                <div class="col-8 d-flex flex-column">
                                                    <a href="{{ route('newsShow', $n->id) }}">

                                                        <div class="card-body p-3">
                                                            <h3 class="card-title mb-1 h6 text-dark">{{ $n->{'title_'.app()->getLocale()} }}</h3>
                                                        </div>
                                                        <div class="card-footer mt-auto bg-white p-3">
                                                            <small class="text-muted">
                                                                <i class="bi bi-calendar"></i> {{ $n->date }}
                                                            </small>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr class="m-0">
                                            @endforeach
                                        </div>
                                    </div>
                                    <hr class="mt-0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
