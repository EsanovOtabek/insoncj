@extends('base.admin')

@section('title', "Arxiv maqolani qo'shish")

@section('content_name', "Arxivga maqolani qo'shish")

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
                            <h3 class="card-title">Maqolani arxivga biriktirish</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" id="doi_form" action="{{ route('admin.dois.create') }}" class="card-body row" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group col-md-12">
                                <label for="title">Jurnal soni</label>
                                <select class="custom-select" id="issue_id" name="issue_id">
                                    <option disabled selected> -- Tanlang -- </option>
                                    @foreach($issues as $issue)
                                        <option value="{{ $issue->id }}"> {{ $issue->yil }} - yil. {{ $issue->number }} - son</option>
                                    @endforeach
                                </select>
                            </div>

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
                                <label for="authors">DOI manzilini kiriting.</label>
                                <input type="text" name="doi_url"  class="form-control" id="doi_url" value="{{ old('doi_url') }}" placeholder="Bo'sh qolsin" disabled>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="file">Fayl yuklash(* Maqola .pdf shaklda.) </label>
                                <input type="file" name="doi_file"  class="form-control" id="doi_file" required  placeholder="file" accept=".pdf">
                            </div>

                            <hr>

                        </form>

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary pl-5 pr-5" form="doi_form">Saqlash</button>
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

        function articles_change(issue_id) {
            // var s_html="<option disabled selected> -- Tanlang -- </option>";
            {{--var articles = @json($articles);--}}

            // articles.forEach(function (article){
            //     if(Number(article['issue_id']) === Number(issue_id)){
            //         s_html += "<option value='" + article['id'] + "'>" + article['title'] + " [" +article['authors'] + "] </option>"
            //     }
            // });
            //
            // $('#article_id').html(s_html);
        }

        @if($issue_id>0)
            $('#issue_id').val({{$issue_id}})
            {{--articles_change({{$issue_id}});--}}
        @endif


        // $('#issue_id').change(function (){
        //     var issue_id = $('#issue_id').val();
        //     articles_change(issue_id);
        // })

    </script>
@endpush
