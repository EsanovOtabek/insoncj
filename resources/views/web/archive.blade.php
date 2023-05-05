@extends('base.web')

@section('title', __('about.journal_archive'))
@section('description',  __('home.journal_name'))
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
                    <li class="breadcrumb-item active" aria-current="page">{{ __('about.journal_archive') }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <hr class="m-0">


    <!-- Team members section-->
    <section class="py-5 bg-white">
        <div class="container my-5">
            <div class="text-center">
                <h2 class="fw-bold text-body">{{ __('about.journal_archive') }}</h2>
                <br><br>
            </div>
            <div class="row gx-5 row-cols-1">
                <div class="m-0">
                    <div class="accordion accordion-flush bg-primary rounded-3 shadow overflow-hidden" id="accordionFlushExample">
                        @foreach($years as $y)
                            <div class="accordion-item bg-light">
                                <h2 class="accordion-header" id="flush-heading{{ $y->year }}">
                                    <button class="accordion-button collapsed fs-48 fw-bold" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse{{ $y->year }}" aria-expanded="false" aria-controls="flush-collapseOne">
                                        {{$y->year}} - yil
                                    </button>
                                </h2>
                                <div id="flush-collapse{{ $y->year }}" class="accordion-collapse collapse text-muted"
                                     aria-labelledby="flush-heading{{ $y->year }}" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">

                                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 g-4">
                                            @foreach($journals as $journal)
                                                @if($journal->year != $y->year)
                                                    @continue
                                                @endif
                                                <!-- {{ $loop->index }} mage -->
                                                <div class="col">
                                                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item shadow">
                                                        <img src="{{ asset('images/site/journal.png') }}" class="card-img-top d-none d-lg-block" alt="...">
                                                        <div class="card-body row">
                                                            <div class="col-7">
                                                                <h5 class="card-title mb-1 h6 text-dark">{{$journal['year']}} {{ __('home.year') }}. {{ $journal['number'] }} {{ __('home.number') }}</h5>
                                                                <p class="card-text text-muted">{{$journal['year']}} {{ __('home.year') }}.</p>
                                                            </div>
                                                            <div class="col-5 text-right">
                                                                <a href="{{ route('files.journal', $journal->file) }}" type="button" class="btn btn-primary btn-sm px-2 py-0">
                                                                    <i class="bi bi-download"></i> {{ __('home.download') }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
