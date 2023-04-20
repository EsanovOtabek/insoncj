@extends('base.master')

@section('title', 'Tizimga kirish')

@push('page_css')
    <link rel="stylesheet" href="{{ asset('adassets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@endpush
@push('page_js')
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script>
        $(function() {
            $.mask.definitions['9'] = false;
            $.mask.definitions['0'] = "[0-9]";
            $("#phone").mask("00-000-00-00");
        });
    </script>
@endpush

    @section('body')

    <body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>Tizimga kirish</b></a>
            </div>
            <div class="card-body">

                @if ($errors->any())
                    <script>
                        @foreach ($errors->all() as $error)
                        toastr.error('{{ $error }}');
                        @endforeach
                    </script>
                @endif

                <form action="" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><b>+998</b></span>
                            </div>
                        </div>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="00-000-00-00    ">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary btn-block">Kirish</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


                <p class="mb-1">
                    <a href="#">Parolni unutdingizmi?</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->


@endsection
