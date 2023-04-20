@extends('base.admin')

@section('title', "Maqola yuborish")

@section('content_name', "Maqola yuborish")

@push('page_css')
    <link rel="stylesheet" href="{{ asset('adassets/plugins/summernote/summernote-bs4.min.css') }}">
@endpush

@section('main_content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-9">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Maqola yuborish</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" id="article_form" action="{{ route('profile.article.store') }}" class="card-body row" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group col-md-12">
                                <label for="title">Maqola mavzusi</label>
                                <input type="text" name="title"  class="form-control" id="title" required placeholder="Maqola mavzusi" value="{{ old('title') }}">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="authors">Mualliflar (* Mualliflarni to'liq F.I.SH larini yozing. Agar mualliflar ko'p bo'lsa ularni vergul bilan ajrating.</label>
                                <input type="text" name="authors"  class="form-control" id="authors" required value="{{ old('authors') }}" placeholder="Muallif1, Muallif2, ...">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="abstract">Maqola annotatsiyasi</label>
                                <textarea id="abstract" class="form-control" name="abstract" rows="4" placeholder="Annotatsiya">{{ old('abstract') }}</textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="keywords">Kalit so'zlar (* Kalit so'zlarni vergul bilan ajratilgan holda kiriting!)</label>
                                <input type="text" name="keywords"  class="form-control" id="keywords" required value="{{ old('keywords') }}" placeholder="Kalit so'zlar">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="file">Maqolani yuklash(* Maqola .doc va .docx formatida bo'lishi va hajmi 15mb dan oshmasligi kerak.) </label>
                                <input type="file" name="file"  class="form-control" id="file" required  placeholder="file" accept=".doc , .docx">
                            </div>

                            <hr>

                        </form>

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary pl-5 pr-5" form="article_form">Saqlash</button>
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

@push('page_js')
    <script src="{{ asset('adassets/plugins/summernote/summernote-bs4.min.js') }}"></script>

    <script type="text/javascript">
        // $('#text_uz').summernote({
        //     height: 100,
        // });
        // $('#text_en').summernote({
        //     height: 100,
        // });
        // $('#text_ru').summernote({
        //     height: 100,
        // });
    </script>
@endpush
