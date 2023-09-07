@extends('base.web')

@section('title', $doi->title)
@section('description', $doi->abstract)
@section('keywords', $doi->kewords)
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
                <h2 class="fw-bold text-body">{{$doi->title}}</h2>
                <br><br>
            </div>
            <div class="row gx-5 row-cols-1">
                <div class="m-0">
                    <div class="col-lg-12">
                        <div class="sikshaa-card bg-white shadow-sm overflow-hidden rounded-3">
                            <div class="sikshaa-card-header py-3 px-4 text-black fs-5 fw-bold border-bottom">
                                Mualliflar: <p class="text-muted">{{$doi->authors}}</p>
                            </div>
                            <div class="sikshaa-card-header py-3 px-4 text-black fs-5 fw-bold border-bottom">
                                DOI: <a href="{{$doi->doi_url}}">{{$doi->doi_url}}</a>
                            </div>
                            <div class="sikshaa-card-body p-4">
                                <h5 class="fw-bold text-black mt-4">{{__('home.abstract')}}:</h5>
                                <p>{{ $doi->abstract }}</p>
                            </div>
                            <div class="sikshaa-card-header py-3 px-4 text-black fs-5 fw-bold border-bottom text-right">
                                <a href="{{route('dois.file', $doi->doi_file)}}" class="btn btn-outline-primary">{{__('home.download')}}</a>

                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>

@endsection
