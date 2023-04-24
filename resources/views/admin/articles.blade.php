@extends('base.admin')

@section('title')
    Maqolalar
@endsection

@section('content_name')
    Maqolalar
@endsection

@push('page_css')
    <link rel="stylesheet" href="{{ asset('adassets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adassets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adassets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endpush

@section('main_content')

    <!-- Default box -->
    <div class="card card-solid ">

        <div class="card-body pb-0 table-responsive">
            <table id="articles_table" class="table table-bordered table-striped mb-5 text-nowrap">
                <thead>
                <tr style="border: 1px solid #333;">
                    <th style="width: 10px">#</th>
                    <th>Mavzu</th>
                    <th>Jurnal soni</th>
                    <th>Mualliflar</th>
                    <th>Maqola holati</th>
                    <th>Ko'rish</th>
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
                        <td class="text-bold">{{ $article->authors }}</td>

                    @switch($article->status)
                            @case('waiting')
                                <td class="bg-warning">Kutilmoqda</td>
                                @break
                            @case('rejected')
                                <td class="bg-danger">Rad etildi</td>
                                @break
                            @case('accepted')
                                <td class="bg-success">Qabul qilindi</td>
                                @break
                        @endswitch
                        <td style="width: 20%">
                            <a href="{{ route('admin.article.details',$article->id) }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection

@push('page_js')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>

    <script>
        $(function () {
            $("#articles_table").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": [ "print"]
            }).buttons().container().appendTo('#articles_table_wrapper .col-md-6:eq(0)');
        });
    </script>

@endpush
