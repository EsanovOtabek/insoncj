@extends('base.admin')

@section('title', "Tahririyat a'zolari")

@section('content_name', "Tahririyat a'zolari")

@section('main_content')

    <!-- Default box -->
    <div class="card card-solid ">

        <div class="card-header text-right">
            <a href="{{ route('admin.experts.create') }}" class="btn btn-primary">
                + Expert qo'shish
            </a>
        </div>

        <div class="card-body pb-0 table-responsive">
            <table class="table table-bordered table-striped mb-5 text-nowrap">
                <thead>
                <tr style="border: 1px solid #333;">
                    <th style="width: 10px">#</th>
                    <th>Rasmi</th>
                    <th>F.I.SH</th>
                    <th>Lavozimi</th>
                    <th>Ish joyi</th>
                    <th>Edit | Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($experts as $expert)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td><img src="{{ asset('images/experts/' . $expert->image) }}" width="80"></td>
                        <td>{{ $expert->fio }}</td>
                        <td>{{ $expert->lavozim }}</td>
                        <td>{{ $expert->ishjoyi }}</td>
                        <td style="width: 20%">
                            <a href="{{ route('admin.experts.edit',$expert->id) }}" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a>
                            |
                            <form action="{{ route('admin.experts.destroy', $expert->id) }}" method="POST" onsubmit="return confirm('Expertni o\'chirmoqchimisiz?')" style="display: inline;">
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
@endsection
