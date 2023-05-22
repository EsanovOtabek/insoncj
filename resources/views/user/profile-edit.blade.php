@extends('base.admin')

@section('title', "Profilni tahrirlash")

@section('content_name', "Profilni tahrirlash")

@push('page_css')
    <link rel="stylesheet" href="{{ asset('adassets/plugins/summernote/summernote-bs4.min.css') }}">
@endpush

@section('main_content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Profilni tahrirlash</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" id="profile_update" action="{{ route('profile.settings') }}" class="card-body row">
                            @csrf

                            <div class="form-group col-md-12">
                                <label for="email">Email:</label>
                                <input type="email"  class="form-control" id="email" required value="{{ $user->email }}" disabled>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="fish">To'liq ismingiz:</label>
                                <input type="text" name="fish"  class="form-control" id="fish" required placeholder="F.I.SH" value="{{ $user->fish }}">
                            </div>


                            <div class="form-group col-md-12">
                                <label for="phone">Telefon:</label>
                                <input type="tel" name="phone"  class="form-control" id="phone" value="{{ $user->phone }}" placeholder="phone">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="workplace">Ish joyingiz:</label>
                                <input type="text" name="workplace"  class="form-control" id="workplace" value="{{ $user->workplace }}" placeholder="Ish joyingiz">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="position">Lavozimingiz:</label>
                                <input type="text" name="position"  class="form-control" id="position" value="{{ $user->position }}" placeholder="Lavozimingiz">
                            </div>

                            <hr>

                        </form>

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary pl-5 pr-5" form="profile_update">Saqlash</button>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->

                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Parolni o'zgartirish</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" id="password_update" action="{{ route('profile.updatePassword') }}" class="card-body row">
                            @csrf

                            <div class="form-group col-md-12">
                                <label for="authors">Eski parolingiz:</label>
                                <input type="password" name="old_password" class="form-control" id="old_password" required>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="authors">Yangi parol:</label>
                                <input type="password" name="new_password" class="form-control" id="new_password" required>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="authors">Yangi parolni takrorlash:</label>
                                <input type="password" name="new_password_confirmation" class="form-control" id="new_password_confirmation" required>
                            </div>

                            <hr>

                        </form>

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary pl-5 pr-5" form="password_update">Saqlash</button>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection

@push('page_js')
    <script src="{{ asset('adassets/plugins/summernote/summernote-bs4.min.js') }}"></script>

    <script type="text/javascript">
        // $('#text_uz').summernote({
        //     height: 100,
        // });
        // $('#text_en').summernote({
        //     height: 100,
        // });
        // $('#text_ru').summernote({
        //     height: 100,
        // });
    </script>
@endpush
