@extends('base.web')

@section('title', 'Tahririyat a\'zolari')
@section('description', "Inson kapitali va ijtimoiy rivojlanish ilmiy jurnali")
@section('og_image', '')

@section('body')
    <!-- Content -->
    <div class="py-3">
        <div class="container">
            <nav>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('index') }}">
                            <i class="bi bi-house"></i> Bosh sahida
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Tahririyat a'zolari</li>
                </ol>
            </nav>
        </div>
    </div>
    <hr class="m-0">


    <!-- Team members section-->
    <section class="py-5 bg-white">
        <div class="container my-5">
            <div class="text-center">
                <h2 class="fw-bold text-body">Tahririyat a'zolari</h2>
                <br><br>
            </div>
            <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                @foreach($experts as $expert)
                    <div class="col mb-5 mb-5 mb-xl-0 ">
                        <div class="text-center bg-white shadow">
                            <img class="img-fluid rounded-1 mt-2 mb-4 px-4" width="200" height="250px" src="{{ asset('images/experts/' . $expert->image) }}" alt="..." />
                            <h5 class="fw-bold text-body">{{ $expert->fio }}</h5>
                            <div class="text-muted">{{ $expert->ishjoyi }} , {{ $expert->lavozim }}</div>
                            <br>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
