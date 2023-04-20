@extends('base.admin')

@section('title', "Tahririyat a'zosi qo'shish")

@section('content_name', "Tahririyat a'zosi qo'shish")

@section('main_content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Expert qo'shish</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" id="news_form" action="{{ route('admin.experts.store') }}" class="card-body row" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group col-md-6">
                                <label>F.I.SH:</label>
                                <input type="text" class="form-control" name="fio" required placeholder="F.I.SH">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Ish joyi:</label>
                                <input type="text" class="form-control" name="ishjoyi" required placeholder="Ish joyi">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Lavozimi:</label>
                                <input type="text" class="form-control" name="lavozim" required placeholder="Lavozimi">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="image">Surati</label>
                                <input type="file" name="image"  class="form-control" id="image" required placeholder="Rasm yuklang" accept="image/png, image/jpeg" >
                            </div>
                            <!-- /.card-body -->

                        </form>

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary pl-5 pr-5" form="news_form">Saqlash</button>
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
