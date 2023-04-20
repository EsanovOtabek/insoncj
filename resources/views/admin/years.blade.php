@extends('base.admin')

@section('title', 'Jurnal yillari')

@section('content_name', 'Jurnal yillari')

@section('main_content')

    <!-- Default box -->
    <div class="card card-solid col-md-8">

        <div class="card-header text-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-addYear">
                + Jurnal yilini qo'shish
            </button>
        </div>

        <div class="card-body pb-0 table-responsive">
            <table class="table table-bordered table-striped mb-5 text-nowrap">
                <thead>
                <tr style="border: 1px solid #333;">
                    <th style="width: 10px">#</th>
                    <th>Yil</th>
                    <th>View | Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($years as $year)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $year->year }}</td>
                        <td style="width: 20%">
                            <a href="{{route('admin.issues.index')}}?year={{ $year->year }}" class="btn btn-primary">
                                <i class="fa fa-eye"></i>
                            </a>
                             |
                            <form action="{{ route('admin.years.destroy', $year->id) }}" method="POST" onsubmit="return confirm('Jurnal yilini o\'chirmoqchimisiz?')" style="display: inline;">
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
    @include('admin.modal.year')
@endsection
