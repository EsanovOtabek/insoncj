@extends('base.admin')

@section('title')
    Arxiv Maqolalar
@endsection

@section('content_name')
    Arxiv Maqolalar

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
            <table id="articles_table" class="table table-bordered table-striped mb-5">
                <thead>
                    <tr style="border: 1px solid #333;">
                        <th style="width: 10px">#</th>
                        <th>Maqola mavzusi</th>
                        <th>Mualliflar</th>
                        <th>Abstract</th>
                        <th>DOI_URL</th>
                        <th>FILE | Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($dois as $doi)
                    <tr>
                        <td style="width: 10px">{{ $loop->index+1 }}</td>
                        <td>{{ $doi->title }}</td>
                        <td class="text-bold">{{ $doi->authors }}</td>
                        <td>{{ $doi->abstract }}</td>
                        <td>{{ $doi->doi_url }}</td>
                        <td> <a href="{{ route('dois.file',$doi->doi_file) }}" class="btn btn-primary"><i class="fa fa-download"></i> </a>

                            |
                            <form action="{{ route('admin.dois.destroy', $doi->id) }}" method="POST" onsubmit="return confirm('Arxiv maqolani o\'chirmoqchimisiz?')" style="display: inline;">
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
@endsection

@push('page_js')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('adassets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adassets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adassets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('adassets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adassets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('adassets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adassets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>

    <script>
        $(function () {
            $("#articles_table").DataTable({
                "responsive": true, "lengthChange": true, "autoWidth": false,
                // "buttons": [ "print"],
            }).buttons().container().appendTo('#articles_table_wrapper .col-md-6:eq(0)');
        });
    </script>

@endpush
