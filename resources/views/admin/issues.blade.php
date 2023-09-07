@extends('base.admin')

@section('title')
    @if(!is_null($this_year))
        {{ $this_year }} - yil.
    @endif
    Jurnal sonlari
@endsection

@section('content_name')
    @if(!is_null($this_year))
        {{ $this_year }} - yil.
    @endif
    Jurnal sonlari
@endsection

@section('main_content')

    <!-- Default box -->
    <div class="card card-solid ">

        <div class="card-header text-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-addIssue">
                + Jurnal sonlarini qo'shish
            </button>
        </div>

        <div class="card-body pb-0 table-responsive">
            <table class="table table-bordered table-striped mb-5 text-nowrap">
                <thead>
                <tr style="border: 1px solid #333;">
                    <th style="width: 10px">#</th>
                    <th>Jurnal rasmi</th>
                    <th>Jurnal soni</th>
                    <th>Jurnal Yili</th>
                    <th>Yuklash</th>
                    <th>Kelib tushgan maqolalar</th>
                    <th>Jurnal arxivi</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($issues as $issue)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td><img src="{{ asset('images/journals/' . $issue->image) }}" alt="" width="120px"></td>
                        <td>{{ $issue->number }} - son</td>
                        <td>{{ $issue->yil }} - yil</td>
                        <td> <a href="{{ route('files.journal',$issue->file) }}" class="btn btn-primary"><i class="fa fa-download"></i> {{$issue->file}}</a> </td>
                        <td><a href="{{ route('admin.articles') }}?issue={{$issue->id}}" class="btn btn-success"><i class="fa fa-eye"></i></a></td>
                        <td>
                            <a href="{{ route('admin.dois') }}?issue={{$issue->id}}" class="btn btn-success"><i class="fa fa-archive"></i></a>
                            |
                            <a href="{{ route('admin.dois.create') }}?issue={{$issue->id}}" class="btn btn-primary"><i class="fa fa-plus"></i></a>

                        </td>
                        <td style="width: 20%">
                            <form action="{{ route('admin.issues.destroy', $issue->id) }}" method="POST" onsubmit="return confirm('Jurnal sonini o\'chirmoqchimisiz?')" style="display: inline;">
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
    @include('admin.modal.issue')
@endsection
