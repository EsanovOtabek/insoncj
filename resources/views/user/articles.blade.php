@extends('base.admin')

@section('title')
    Mening maqolalarim
@endsection

@section('content_name')
    Mening maqolalarim
@endsection

@section('main_content')

    <!-- Default box -->
    <div class="card card-solid ">

        <div class="card-header text-right">
            <a href="{{ route('profile.article.create') }}" class="btn btn-primary">
                + Maqola yuborish
            </a>
        </div>

        <div class="card-body pb-0 table-responsive">
            <table class="table table-bordered table-striped mb-5 text-nowrap">
                <thead>
                <tr style="border: 1px solid #333;">
                    <th style="width: 10px">#</th>
                    <th>Mavzu</th>
                    <th>Jurnal soni</th>
                    <th>Mualliflar</th>
                    <th>Maqola holati</th>
                    <th>Yuklash | Tahrirlash | O'chirish</th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $article->title }}</td>
                        <td>
                            {{ $article->issue->yil }} - yil
                            {{ $article->issue->number }} - son.
                        </td>
                        <td>{{ $article->authors }}</td>
                        @switch($article->status)
                            @case('waiting')
                                <td class="bg-warning">Kutilmoqda |
                                    @if(isset($article->comment))
                                        <button class="btn btn-light" onclick='comments("{{$article->comment}}")'>
                                            <i class="fa fa-comment"></i>
                                        </button>
                                    @endif
                                </td>
                                @break
                            @case('rejected')
                                <td class="bg-danger">Rad etildi |
                                    @if(isset($article->comment))
                                        <button class="btn btn-light" onclick='comments("{{$article->comment}}")'>
                                            <i class="fa fa-comment"></i>
                                        </button>
                                    @endif
                                </td>
                                @break
                            @case('accepted')
                                <td class="bg-success">Qabul qilindi |
                                    @if(isset($article->comment))
                                        <button class="btn btn-light" onclick='comments("{{$article->comment}}")'>
                                            <i class="fa fa-comment"></i>
                                        </button>
                                    @endif
                                </td>
                                @break
                        @endswitch

                        <td style="width: 20%">
                            <a href="{{ storage_path('article/' . $article->file) }}" target="__blank" class="btn btn-primary">
                                <i class="fa fa-download"></i>
                            </a>
                            |
                            <a href="{{ route('profile.article.edit',$article->id) }}" class="btn btn-success"><i class="fa fa-pencil-alt"></i></a>
                            |
                            <form action="{{ route('profile.article.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Jurnal sonini o\'chirmoqchimisiz?')" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <div class="modal fade" id="modal-comments">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Maqolaga admin tomonidan izohlar.</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="m-comments"></p>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Orqaga</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->



@endsection

@push('page_js')

    <script>

        function comments(comments) {

            $('#m-comments').html(comments);
            $('#modal-comments').modal('toggle');
        }
    </script>
@endpush
