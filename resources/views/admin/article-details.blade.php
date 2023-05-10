@extends('base.admin')

@section('title', "Maqola ma'lumotlari")

@section('content_name', "Maqola ma'lumotlari")

@section('main_content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-9">
                    <!-- general form elements -->
                    <div class="card card-primary row">
                        <div class="card-header">
                            <h3 class="card-title">Kelib tushgan sana:  {{  explode(' ', $article->created_at)[0] }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="col-md-12 px-4 py-3">
                            <p class="d-inline h5"><strong> Maqola mavzusi:</strong> {{ $article->title }} </p>
                        </div>
                        <hr>

                        <div class="col-md-12 px-4 py-3">
                            <p class="d-inline h5"><strong> Mualliflar:</strong> {{ $article->authors }} </p>
                        </div>
                        <hr>

                        <div class="col-md-12 px-4 py-3">
                            <p class="d-inline h5"><strong> Maqola annotatsiyasi:</strong><br> {{ $article->abstract }} </p>
                        </div>
                        <hr>


                        <div class="col-md-12 px-4 py-3">
                            <p class="d-inline h5"><strong> Kalit so'zlar:</strong> {{ $article->keywords }} </p>
                        </div>
                        <hr>

                        <div class="col-md-12 px-4 py-3 row">
                            <div class="col-md-3">
                                <b class="d-block pb-2"> Maqola fayli: </b>
                                <a href="#" class="btn btn-success" style="width: 160px"><i class="fa fa-download"></i> Yuklash</a>
                            </div>
                            <div class="col-md-3">
                                <b class="d-block pb-2"> Izoh: </b>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-addComment" style="width: 160px"><i class="fa fa-pen"></i> Xabar yozish</button>
                            </div>
                            <div class="col-sm-6">
                                <form action="{{route('admin.article.status', $article->id)}}" method="get">
                                    <div class="form-group">
                                        <label for="status_select">Statusni o'zgartirish:</label>

                                        <select class="custom-select" id="status_select" name="status" onchange="this.form.submit()">
                                            <option value="waiting" class="bg-warning">Kutilmoqda</option>
                                            <option value="accepted" class="bg-success">Qabul qilish</option>
                                            <option value="rejected" class="bg-danger">Rad etish</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- /.card -->

                </div>

                <div class="col-md-9">
                    <div class="card card-primary ">
                        <div class="px-4 py-3">
                            <p>{!! $article->comment !!}</p>
                            <hr>
                        </div>
                    </div>
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->



    <div class="modal fade" id="modal-addComment">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.article.comment', $article->id) }}">
                    @csrf
                    @method('POST')
                    <div class="modal-header">
                        <h4 class="modal-title">Ushbu maqola uchun izoh yozish.</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body form-group">
                        <textarea  name="comment" class="form-control" id="comment" required placeholder="Izoh yozish" rows="5" cols="50"></textarea>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Bekor qilish</button>
                        <button type="submit" class="btn btn-primary">Saqlash</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->




@endsection

@push('page_js')



    <script type="text/javascript">
        $('#status_select').val('{{ $article->status }}');
    </script>
@endpush
