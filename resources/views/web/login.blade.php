@extends('base.web')

@section('title', "Tizimga kirish")
@section('description', "Inson kapitali va ijtimoiy rivojlanish ilmiy jurnali")
@section('og_image', '')
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
    <!-- Content -->
    <div class="bg-primary bg-gradient">
        <!-- Login -->
        <div class="container py-5 login">
            <!-- Login -->
            <div id="login">
                <div class="m-auto bg-white shadow-sm p-5 rounded-3 text-center col-md-4 mx-auto">
                    <h3 class="fw-bold text-black mb-2">Tizimga kirish</h3>
                    <form action="" class="text-start pt-4" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <label for="fish" class="form-label small text-muted col-12">Telefon <small class="text-danger">*</small></label>
                            <div class="input-group-append col-4 m-0">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ps-md-4 ps-sm-3"><b>+998</b></span>
                                </div>
                            </div>
                            <div class="col-8 p-0"  style="height: 38px; margin-left: -10px">
                                <input type="tel" name="phone" class="form-control h-100" id="phone" placeholder="XX-XXX-XX-XX">
                            </div>

                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label small text-muted">Parol <small class="text-danger">*</small></label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="********">
                        </div>

                        <button type="submit" class="btn btn-dark fw-bold fs-7 rounded-3 shadow-sm w-100 border-0 px-4 py-3 text-uppercase">Kirish</button>
                    </form>

                    <p class="text-muted mb-0">Tizimdan ro'yxatdan o'tmaganmisiz? <a href="{{ route('register') }}" class="text-mdinfo">Ro'yxatdan o'tish</a></p>
                </div>
                <p class="mb-0 text-center small text-white my-5">Ro'yxatdan o'tishda muammo bormi? <a href="tel:+998932360433" class="text-decoration-underline text-white">Bog'lanish</a></p>
            </div>
        </div>
    </div>



@endsection
