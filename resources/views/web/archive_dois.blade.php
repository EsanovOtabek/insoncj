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
                <h2 class="fw-bold text-body">{{$journal['yil']}} {{ __('home.year') }}. {{ $journal['number'] }} {{ __('home.number') }}</h2>
                <br><br>
            </div>
            <div class="row gx-5 row-cols-1">
                <div class="m-0">
                    <div class="col-lg-10 job-page">
{{--                        <h2 class="fw-bold text-black">{{$journal['yil']}} {{ __('home.year') }}. {{ $journal['number'] }} {{ __('home.number') }} maqolalari</h2>--}}

                        @foreach($dois as $doi)
                        <div class="rounded-3 overflow-hidden shadow mb-4 border-bottom border-primary">
                            <div class="d-flex align-items-center justify-content-between border-bottom bg-light position-relative p-4">
                                <div>
                                    <h4 class="fw-bold mb-2 text-black d-flex align-items-center">
                                        <span class="fs-4">{{ $doi->title }}</span> </h4>
                                    <div class="fs-6 mb-0 d-flex small align-items-center">
                                        <i class="icofont-users me-1"></i> {{ $doi->authors }}
                                        <div class="vr mx-3"></div>
                                    </div>
                                    <div class="fs-6 mb-0 d-flex small align-items-center">
                                        <i class="icofont-archive me-1"></i>
                                        DOI: <a href="{{ $doi->doi_url }}" class="btn btn-link">{{ $doi->doi_url }}</a>
                                        <div class="vr mx-3"></div>
                                    </div>
                                    <div class="fs-6 mb-0 d-flex small align-items-center">
                                        <i class="icofont-download me-1"></i>
                                        <a href="{{ route('dois.file',$doi->doi_file) }}" class="btn btn-link">{{ __('home.download') }}</a>
                                        <div class="vr mx-3"></div>
                                    </div>
                                </div>
                                <div>
                                    <a href="{{route('archive.doi.show', $doi->id)}}" class="btn btn-outline-primary btn-sm shadow-sm">
                        <span>
                        {{ __('home.more') }}
                        </span>
                                    </a>

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
