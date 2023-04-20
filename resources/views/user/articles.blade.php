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
                    <th>Tahrirlash | O'chirish</th>
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
                        <td>
                            <a href="{{ storage_path('app/article/' . $article->file) }}" target="_blank" class="btn btn-primary">
                                <i class="fa fa-download"></i> Yuklash
                            </a>
                        </td>
                        <td style="width: 20%">
                            <a href="{{ route('profile.article.edit',$article->id) }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
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
@endsection
