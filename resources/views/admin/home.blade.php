@extends('base.admin')

@section('title', 'Bosh sahifa')

@section('content_name', 'Bosh sahifa')

@push('page_css')
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush

@section('main_content')

    <div class="row">
        <div class="col-lg-3 col-6">

            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $users }}</h3>
                    <p>Foydalanuvchilar</p>
                </div>
                <div class="icon">
                    <i class="ion ion-people"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $articles }}</h3>
                    <p>Maqolalar</p>
                </div>
                <div class="icon">
                    <i class="ion ion-document"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $issues }}</h3>
                    <p>Jurnal sonlari</p>
                </div>
                <div class="icon">
                    <i class="ion ion-list-outline"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $experts }}</h3>
                    <p>Ekspertlar</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
            </div>
        </div>

    </div>

@endsection
