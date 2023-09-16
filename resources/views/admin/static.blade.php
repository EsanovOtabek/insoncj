@extends('base.admin')

@section('title', 'Static Ma\'lumotlar')

@section('content_name', 'Static Ma\'lumotlar')

@push('page_css')
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush

@section('main_content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Static Ma'lumotlar</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" id="static_form" action="{{ route('admin.static_elements') }}" class="card-body row">
                            @csrf
                            <div class="form-group col-md-4">
                                <label for="name">Tel1 </label>
                                <input type="text" name="static_tel1"  class="form-control" id="title_uz" required value="{{ $static_tel1}}" placeholder="static_tel1">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="name">Tel2 </label>
                                <input type="text" name="static_tel2"  class="form-control" id="title_en" required value="{{ $static_tel2}}" placeholder="static_tel2">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="name">Tel3 </label>
                                <input type="text" name="static_tel3"  class="form-control" id="title_ru" required value="{{ $static_tel3}}" placeholder="static_tel3">
                            </div>

                            <hr>

                            <div class="form-group col-md-4">
                                <label for="name">Adress(UZ) </label>
                                <input type="text" name="adress_uz"  class="form-control" id="adress_uz" required value="{{ $adress_uz}}" placeholder="adress_uz">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="name">Adress(EN) </label>
                                <input type="text" name="adress_en"  class="form-control" id="adress_en" required value="{{ $adress_en}}" placeholder="adress_en">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="name">Adress(RU) </label>
                                <input type="text" name="adress_ru"  class="form-control" id="adress_ru" required value="{{ $adress_ru}}" placeholder="adress_ru">
                            </div>

                            <hr>
                            <div class="form-group col-md-4">
                                <label for="name">Email </label>
                                <input type="text" name="static_email"  class="form-control" id="static_email" required value="{{ $static_email}}" placeholder="static_email">
                            </div>

                        </form>

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary pl-5 pr-5" form="static_form">Saqlash</button>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
