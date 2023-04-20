@extends('base.admin')

@section('title', "E'lonlar")

@section('content_name', "E'lonlar")

@section('main_content')

    <!-- Default box -->
    <div class="card card-solid ">

        <div class="card-header text-right">
            <a href="{{ route('admin.news.create') }}" class="btn btn-primary">
                + E'lon qo'shish
            </a>
        </div>

        <div class="card-body pb-0 table-responsive">
            <table class="table table-bordered table-striped mb-5 text-nowrap">
                <thead>
                <tr style="border: 1px solid #333;">
                    <th style="width: 10px">#</th>
                    <th>Sarlavha</th>
                    <th>Sana</th>
                    <th>Saytda ko'rish</th>
                    <th>Edit | Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($news as $n)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $n->title_uz }} - son</td>
                        <td>{{ $n->date }} - yil</td>
                        <td> <a href="{{ route('newsShow',$n->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a> </td>
                        <td style="width: 20%">
                            <a href="{{ route('admin.news.edit',$n->id) }}" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a>
                            |
                            <form action="{{ route('admin.news.destroy', $n->id) }}" method="POST" onsubmit="return confirm('E\'lonni o\'chirmoqchimisiz?')" style="display: inline;">
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
